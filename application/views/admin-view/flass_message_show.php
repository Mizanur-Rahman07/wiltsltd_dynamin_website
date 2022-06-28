<div style="width:30%;  color:aliceblue;background-color:#b0a122;" class="">
 <?php 
//print("<pre>".print_r($this->session->flashdata, true)."</pre>"); //exit;


if ($this->session->flashdata('success')) {  
 echo  $this-> session->flashdata('success');
 }
 ?>
 </div>

 <div style="width:30%; color:white;background-color:red;" class="">
 <?php 
//print("<pre>".print_r($this->session->flashdata, true)."</pre>"); //exit;

 if ($this->session->flashdata('error')) { 
 echo  $this-> session->flashdata('error');
 }
 ?>
 </div>