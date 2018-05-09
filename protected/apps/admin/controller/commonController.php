<?php
//公共类
class commonController extends baseController{

	public function __construct()
	{
		parent::__construct();
		//登录与权限验证
		$config['AUTH_LOGIN_URL']=url('admin/index/login');
		$config['AUTH_LOGIN_NO']=array('index'=> array('login','logout','verify'),'common'=>'*');//无须验证的方法
		$config['AUTH_POWER_CACHE']=false;
		Auth::check($config);//登陆和权限检查
		//print_r($_SESSION);
	}

	//密码加密
	protected  function newpwd($password)
	{
		return md5(substr(md5($password),7,-9));
	}

	//文件上传
	protected  function  upload($savePath='',$maxSize='',$allowExts='',$allowTypes='',$saveRule='')
	{
		$upload=new UploadFile($savePath,$maxSize,$allowExts,$allowTypes,$saveRule);
		return $upload;
	}
    //获取app模版下全部模版
    protected function temps($appname='default'){
        $config=require(BASE_PATH.'apps/'.$appname.'/config.php');
		if(empty($config['TPL']['TPL_TEMPLATE_PATH'])) $templepath=BASE_PATH.'apps/'.$appname.'/view';
		else $templepath=BASE_PATH.'apps/'.$appname.'/view/'.$config['TPL']['TPL_TEMPLATE_PATH'];
		if(is_dir($templepath)){
				$temps=getFileName($templepath.'/');//前台模板列表
                if(empty($temps)) $this->error('前台模板文件夹为空~');
                $temple=array();
				foreach ($temps as $vo){
					  $tp=substr($vo['name'],0,strrpos($vo['name'],config('TPL_TEMPLATE_SUFFIX')));
					  if(!empty($tp)){
					  	$tps=explode('_',$tp);
					  if(isset($tps[1])) $temple[$tps[0]][]=$tps[1];
					  }	     
				}
		}else $this->error('前台模板文件夹不存在~');
		return $temple;
	}
   //信息添加，编辑时获得模板选项
    protected function tempchoose($mark='index',$default='index'){
         $temparray=$this->temps();
         if(empty($temparray[$mark])) return null;
         $choose='';
         	foreach ($temparray[$mark] as $vo) {
         		$select='';
         		if($vo==$default) //默认模板
         		   $select='selected="selected"';
                $choose.='<option '.$select.' value="'.$mark.'_'.$vo.'">'.$mark.'_'.$vo.'</option>';
         	}
         return $choose;
    }

   //信息添加或者编辑时ajax获取拓展字段信息
	protected function extend_field()
	{
		$id=intval(in($_POST['sid']));//分类id
		$exmesid=intval(in($_POST['extfield']));//拓展表记录id
		$info = model('sort')->find("id='{$id}'",'extendid');
		$extendid = $info['extendid']; //取得字段
		if($extendid==0) echo json_encode($info['extendid']);//判断是否为字段
		else{
			$fieldlist = model('extend')->select("pid='{$extendid}'","","norder DESC");
			if(!empty($exmesid)&& !empty($fieldlist)){//如果是编辑信息，取出字段值
				$extableinfo= model('extend')->find("id='{$extendid}'",'tableinfo','pid');//找到拓展表名
				$extinfo=model('extend')->Extfind($extableinfo['tableinfo'],"id='{$exmesid}'");
				for($i=0;$i<count($fieldlist);$i++){//将默认值替换为查询值
					if(($fieldlist[$i]['type']!=4) && ($fieldlist[$i]['type']!=6)){
						$fieldlist[$i]['defvalue']=$extinfo[$fieldlist[$i]['tableinfo']];
					}else{
						$fieldlist[$i]['choosevalue']=$extinfo[$fieldlist[$i]['tableinfo']];//如果是下拉框，加入选中值
					}
				}
			}
			echo json_encode($fieldlist);//输出
		}
	}
    //获取keywords
    protected function getkeyword($content='')
    {
        if(!empty($content)){
        	$segment = new Segment();
            $key=$segment->get_keyword(iconv('utf-8','gbk',$content));
            $tag=iconv('gbk','utf-8',str_replace(" ", ",", $key));
            return $tag;
        }
        return '';
    }
    //生成tag标签
    protected function crtags($content='')
    {
    	$content=trim($content);
        if(empty($content)) return false;
        $content=str_replace('，',',',$content);
        if(','==substr($content,-1)) $content=substr($content, 0, -1);
        if(','==substr($content,0,1)) $content=substr($content,1);
        $tags=explode(',',$content);
        unset($content);
        foreach ($tags as $key=>$vo) {
        	$vo=in($vo);
        	if(!empty($vo)) {
        		$tags[$key]=$vo;
        		$constr.=empty($constr)?'"'.$vo.'"':',"'.$vo.'"';
           }else unset($tags[$key]);
        }
        $taged=model('tags')->select('name in ('.$constr.')','name');

        $tagsd=array();
        if(!empty($taged)){
           foreach ($taged as $vo){
        	 $tagsd[]=$vo['name'];
           }
           unset($taged);
        }
        $i=0;
        foreach ($tags as $vo) {
        	$lennum=strlen($vo);
        	if(!in_array($vo,$tagsd) && $lennum<60 && $lennum>0) {
        		$data['name']=$vo;
        		$data['hits']=0;
        		$data['addtime']=time();
        		model('tags')->insert($data);
        		$i++;
        	}
        }
        return $i;
    }
    protected function checkConPower($table='',$id='')
    {
       if(!empty($_SESSION['admin_'.$table.'power'])) {
			$power=explode(',',$_SESSION['admin_'.$table.'power']);
			if(!in_array($id,$power)) return false;
		}
		return true;
    }
    //编辑器获得第n张图
    protected function onepic($content,$num=1)
    {
    	$num=empty($num)?1:intval($num);
        $ext = 'gif|jpg|jpeg|bmp|png';
        preg_match_all("/(href|src)=([\"|']?)([^ \"'>]+\.($ext))\\2/i",html_out($content), $matches); 
        return $matches[3][$num-1];
    }
    //抓取远程图
    protected function localimage($content='',$path=''){
        //文件路径
        $file_path = ROOT_PATH.'upload/'.$path.'/';
        //文件URL路径
        $file_url = __UPLOAD__.'/'.$path.'/';
        $body=html_out($content);
        $img_array = array();
        preg_match_all("/(src|SRC)=[\"|'| ]{0,}(http:\/\/(.*)\.(gif|jpg|jpeg|bmp|png))/isU",$body,$img_array);
        $img_array = array_unique($img_array[2]);
        set_time_limit(0);
        $milliSecond = date("YmdHis").'_';
        if(!is_dir($file_path)) @mkdir($file_path,0777,true);
        foreach($img_array as $key =>$value)
        {
            $value = trim($value);
            $ext=explode('.', $value);
            $ext=end($ext);
            $get_file = @Http::doGet($value,5);
            $rndFileName = $file_path.$milliSecond.$key.'.'.$ext;
            $fileurl = $file_url.$milliSecond.$key.'.'.$ext;
            if($get_file)
            {
                $status=@file_put_contents($rndFileName, $get_file);
                if($status){
                    $body = str_replace($value,$fileurl,$body);
                }
            }
        }
        return $body;
    }
	/*******编辑文件处理开始*******/
	public $order;//编辑器文件管理排序
	//编辑器上传
	protected function EditUploadJson($filename)
	{
		$root=__ROOT__;
		//文件保存目录路径
		$php_path = ROOT_PATH.'upload/';
		$php_url = $root.'/upload/';
		//文件保存目录路径
		$save_path = $php_path.$filename.'/';
		//文件保存目录URL
		$save_url = $php_url.$filename.'/';
		//定义允许上传的文件扩展名
		$ext_arr = array(
	                  'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'),
	                  'flash' => array('swf', 'flv'),
	                  'media' => array('swf', 'flv', 'mp3','mp4','f4v','wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb'),
	                  'file' => array('doc', 'docx', 'xls', 'xlsx', 'txt', 'zip', 'rar', 'gz', 'bz2','pdf'),
		);
		//最大文件大小
		$max_size = intval(config('fileupSize'));

		$save_path = realpath($save_path) . '/';

		//有上传文件时
		if (empty($_FILES) === false) {
			//原文件名
			$file_name = $_FILES['imgFile']['name'];
			//服务器上临时文件名
			$tmp_name = $_FILES['imgFile']['tmp_name'];
			//文件大小
			$file_size = $_FILES['imgFile']['size'];
			//检查文件名
			if (!$file_name) {
				$this->AlertJson("请选择文件。");
			}
			//检查目录
			if (@is_dir($save_path) === false) {
				$this->AlertJson("上传目录不存在。");
			}
			//检查目录写权限
			if (@is_writable($save_path) === false) {
				$this->AlertJson("上传目录没有写权限。");
			}
			//检查是否已上传
			if (@is_uploaded_file($tmp_name) === false) {
				$this->AlertJson("临时文件可能不是上传文件。");
			}
			//检查文件大小
			if ($file_size > $max_size) {
				$this->AlertJson("上传文件大小超过限制。");
			}
			//检查目录名
			$dir_name = empty($_GET['dir']) ? 'image' : trim($_GET['dir']);
			if (empty($ext_arr[$dir_name])) {
				$this->AlertJson("目录名不正确。");
			}
			//获得文件扩展名
			$temp_arr = explode(".", $file_name);
			$file_ext = array_pop($temp_arr);
			$file_ext = trim($file_ext);
			$file_ext = strtolower($file_ext);
			//检查扩展名
			if (in_array($file_ext, $ext_arr[$dir_name]) === false) {
				$this->AlertJson("上传文件扩展名是不允许的扩展名。\n只允许" . implode(",", $ext_arr[$dir_name]) . "格式。");
			}
			//创建文件夹
			if ($dir_name !== '') {
				$save_path .= $dir_name . "/";
				$save_url .= $dir_name . "/";
				if (!file_exists($save_path)) {
					mkdir($save_path);
				}
			}
			$ymd = date("Ymd");
			$save_path .= $ymd . "/";
			$save_url .= $ymd . "/";
			if (!file_exists($save_path)) {
				mkdir($save_path);
			}
			//新文件名
			$new_file_name = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $file_ext;
			//移动文件
			$file_path = $save_path . $new_file_name;
			@chmod($file_path, 0644);
			if (move_uploaded_file($tmp_name, $file_path) === false) {
				$this->AlertJson("上传文件失败。");
			}

			$file_url = $save_url . $new_file_name;
			//图片加水印
			if(config('ifwatermark') && in_array($file_ext,$ext_arr['image']))//是否加水印
			{
				$Image = new Image();
				$logo = ROOT_PATH.'public/watermark/'.config('watermarkImg');//水印图
				$Image->water($file_path,$logo,config('watermarkPlace')); //执行
			}
			$json = new ServicesJson();
			echo $json->encode(array('error' => 0, 'url' => $file_url));
			exit;
		}
	}
	//编辑器文件上传出错提示
	protected  function AlertJson($msg) {
		$json = new ServicesJson();
		echo $json->encode(array('error' => 1, 'message' => $msg));
		exit;
	}

	//编辑器上传管理
	protected function EditFileManagerJson($filename)
	{
		$root=__ROOT__;
		//根目录路径，可以指定绝对路径，比如 /var/www/attached/
		$root_path =ROOT_PATH.'upload/'.$filename.'/';
		//根目录URL，可以指定绝对路径，比如 http://www.yoursite.com/attached/
		$root_url = $root.'/upload/'.$filename.'/';
		//图片扩展名
		$ext_arr = array('gif', 'jpg', 'jpeg', 'png', 'bmp');

		//目录名
		$dir_name = empty($_GET['dir']) ? '' : trim($_GET['dir']);
		if (!in_array($dir_name, array('', 'image', 'flash', 'media', 'file'))) {
			echo "Invalid Directory name.";
			exit;
		}
		if ($dir_name !== '') {
			$root_path .= $dir_name . "/";
			$root_url .= $dir_name . "/";
			if (!file_exists($root_path)) {
				mkdir($root_path);
			}
		}
		//根据path参数，设置各路径和URL
		if (empty($_GET['path'])) {
			$current_path = realpath($root_path) . '/';
			$current_url = $root_url;
			$current_dir_path = '';
			$moveup_dir_path = '';
		} else {
			$current_path = realpath($root_path) . '/' . $_GET['path'];
			$current_url = $root_url . $_GET['path'];
			$current_dir_path = $_GET['path'];
			$moveup_dir_path = preg_replace('/(.*?)[^\/]+\/$/', '$1', $current_dir_path);
		}
		echo realpath($root_path);
		//排序形式，name or size or type
		global $order;
		$order = empty($_GET['order']) ? 'name' : strtolower($_GET['order']);

		//不允许使用..移动到上一级目录
		if (preg_match('/\.\./', $current_path)) {
			echo 'Access is not allowed.';
			exit;
		}
		//最后一个字符不是/
		if (!preg_match('/\/$/', $current_path)) {
			echo 'Parameter is not valid.';
			exit;
		}
		//目录不存在或不是目录
		if (!file_exists($current_path) || !is_dir($current_path)) {
			echo 'Directory does not exist.';
			exit;
		}
		//遍历目录取得文件信息
		$file_list = array();
		if ($handle = opendir($current_path)) {
			$i = 0;
			while (false !== ($filename = readdir($handle))) {
				if ($filename{0} == '.') continue;
				$file = $current_path . $filename;
				if (is_dir($file)) {
					$file_list[$i]['is_dir'] = true; //是否文件夹
					$file_list[$i]['has_file'] = (count(scandir($file)) > 2); //文件夹是否包含文件
					$file_list[$i]['filesize'] = 0; //文件大小
					$file_list[$i]['is_photo'] = false; //是否图片
					$file_list[$i]['filetype'] = ''; //文件类别，用扩展名判断
				} else {
					$file_list[$i]['is_dir'] = false;
					$file_list[$i]['has_file'] = false;
					$file_list[$i]['filesize'] = filesize($file);
					$file_list[$i]['dir_path'] = '';
					$explode=explode('.', trim($file));
                    $array_pop=array_pop($explode);
                    $file_ext = strtolower($array_pop);
					$file_list[$i]['is_photo'] = in_array($file_ext, $ext_arr);
					$file_list[$i]['filetype'] = $file_ext;
				}
				$file_list[$i]['filename'] = $filename; //文件名，包含扩展名
				$file_list[$i]['datetime'] = date('Y-m-d H:i:s', filemtime($file)); //文件最后修改时间
				$i++;
			}
			closedir($handle);
		}
		usort($file_list,array('commonController','EditSort'));//该函数在自定义函数中
		$result = array();
		//相对于根目录的上一级目录
		$result['moveup_dir_path'] = $moveup_dir_path;
		//相对于根目录的当前目录
		$result['current_dir_path'] = $current_dir_path;
		//当前目录的URL
		$result['current_url'] = $current_url;
		//文件数
		$result['total_count'] = count($file_list);
		//文件列表数组
		$result['file_list'] = $file_list;
		//输出JSON字符串
		$json = new ServicesJson();
		echo $json->encode($result);
	}

	//编辑器文件管理排序函数
	protected function EditSort($a, $b){
		global $order;
		if ($a['is_dir'] && !$b['is_dir']) {
			return -1;
		} else if (!$a['is_dir'] && $b['is_dir']) {
			return 1;
		} else {
			if ($order == 'size') {
				if ($a['filesize'] > $b['filesize']) {
					return 1;
				} else if ($a['filesize'] < $b['filesize']) {
					return -1;
				} else {
					return 0;
				}
			} else if ($order == 'type') {
				return strcmp($a['filetype'], $b['filetype']);
			} else {
				return strcmp($a['filename'], $b['filename']);
			}
		}
	}
	/*******编辑文件处理结束*******/

	//图片批量上传,ajax方式使用
	protected function AjaxUpload($filename,$ifthumb=false,$thumbtype=1,$thumbMaxwidth,$thumbMaxheight)
	{
		$path=ROOT_PATH.'upload/'.$filename.'/';
		$upload = $this->upload($path,config('imgupSize'),'jpg,bmp,gif,png');
		$upload->saveRule = date('ymdhis').mt_rand(); //命名规范
		$upload->thumb = $ifthumb; //缩略图开关
		$upload->thumbType=$thumbtype;
		$upload->thumbMaxWidth = empty($thumbMaxwidth)?config('thumbMaxwidth'):$thumbMaxwidth; // 缩略图最大宽度
		$upload->thumbMaxHeight = empty($thumbMaxheight)?config('thumbMaxheight'):$thumbMaxheight; // 缩略图最大高度
		$upload->upload(); //上传
		$info = $upload->getUploadFileInfo(); //返回信息 Array ( [0] => Array ( [name] => 未命名.jpg [type] => image/pjpeg [size] => 53241 [key] => Filedata [extension] => jpg [savepath] => ../../../upload/2011-12-17/ [savename] => 1112170727041127335395.jpg ) )
		if (empty($info)) return;
		// 输出
		if(config('ifwatermark'))//是否加水印
		{
			$Image = new Image();
			$tp = $info[0]['savepath'].$info[0]['savename']; //原图
			$logo = ROOT_PATH.'public/watermark/'.config('watermarkImg');//水印图
			$Image->water($tp,$logo,config('watermarkPlace')); //执行
		}
		echo $info[0]['savename'];
	}
}