<?php
    
function file_get_contents_curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       

        $data = curl_exec($ch);
        curl_close($ch);

    return $data;
}
    
    class simpleQuery{
        protected $jsonLocation = " ";
        protected $getContentsMethod = " ";
        
        public function __construct() {
            $this->jsonLocation = "../members.json";
            $this->getContentsMethod = "curl";
            
            return "Set Value";
        }
        
        protected function __set($variableName, $value){
            $this->data[$variableName] = $value;
        }
        
        protected function __get($variableName) {
            if(isset($this->data[$variableName])){
                return $this->data[$variableName];
            }else {
                return "Variable does not exist";
            }
        }
        
        //this isnt a very good function but it is just meant to be a quick solution
        protected function query($query) {
            $valueArray = explode(' ',trim($query));
                if($valueArray[0] == "SELECT" || $valueArray[0] == "select") {
                    $secondWord = $valueArray[1] or die("Query Too Short");
                    
                    if($secondWord == "*"){
                        if(isset($valueArray[2])){
                          $thirdWord = $valueArray[2];
                        } else {
                            $data = file_get_contents_curl("https://vast-mesa-54350.herokuapp.com/members.json");
                            
                            return $data;
                        }
                    }
                }
        }
    }


?>