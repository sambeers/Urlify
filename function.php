<?php

//create quick url from string
function urlify($string,$delimiter="",$suffix=""){//delimiter and suffix optional
  if(strpos($string,",")===false){//no csv, process as usual
    $url=str_replace(
      " ",$delimiter,str_replace(
        "-",$delimiter,str_replace(
          "_",$delimiter,$string
        )
      )
    );
  }else{//it IS csv, explode
    $strings_=explode(",",$string);
    if(strpos($delimiter,",")!==false){//multiple delimiters
      $delimiters_=explode(",",$delimiter);
    }
    $x=1;
    $urls=array();
    foreach($strings_ as $string_){
      trim($string_);//accounts for different typing styles: ", "
      if(isset($delimiters_)){
        $delimiter_=trim($delimiters_[$x]);
        $urls[]=str_replace(
          " ",$delimiter_,str_replace(
            "-",$delimiter_,str_replace(
              "_",$delimiter_,$string_
            )
          )
        );
      }else{
        $urls[]=str_replace(
          " ",$delimiter,str_replace(
            "-",$delimiter,str_replace(
              "_",$delimiter,$string_
            )
          )
        );
      }
      $x++;
    }
    $url=implode("/",$urls);//combine
  }
  if($suffix!==""){//has suffix
    if(strtolower(substr($url,"-".strlen($suffix)))!==strtolower($suffix)){
      if(strtolower(substr($url,strlen($delimiter)))!==strtolower($delimiter)){
        $url.=$delimiter;
      }
      $url.=$suffix;
    }
  }
  return"//".$_SERVER['HTTP_HOST']."/".strtolower($url);
}
