<?php


class FileOwners
{
    public static function groupByOwners($files)
    {
        $new_array = array();
        foreach($files as $fileName=>$owner)
        {
            $new_array[$owner][] = $fileName;                // 1st loop   $new_array["Randy"][] = "Input.txt"   *this sets the key ['Randy'] for the new_array (and value)
                                                            // 2nd loop   $new_array["Stan"][] = "Code.py"      *this sets the key ['Stan'] for the new_array  (and value)
                                                            // 3rd loop   $new_array["Randy"][] = "Output.txt"  *the key['Randy'] has already been set, so this adds the value to the key
        }
        return $new_array;
      
            
    }
    
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);

//$array_of_files = array("Image.png"=>"Jason", "some.txt"=>"Billy","File.net"=>"Mikey", "Execute.exe"=>"Herman", "this.js"=>"Billy","that.js"=>"Billy","those.js"=>"Billy");
//$new_file = new FileOwners();
//$new_file->groupByOwners($array_of_files);


var_dump(FileOwners::groupByOwners($files));