<?php
	include_once('../../conexion.php');
	class Product extends conexion{
		public $code;
		public $product;
		public $description;
		public $price;

		public function __construct(){ 
      parent::__construct(); 
    } 

		public function get_products(){ 
      $sql = $this->db->query("SELECT * FROM tblproductos");  
      $html = '';
      foreach ($sql->fetch_all(MYSQLI_ASSOC) as $key){
        $code = "'".$key['idproducto']."'";
        $html .= '<tr>
                    <td>'.$key['idproducto'].'</td>
                    <td>'.$key['nombre'].'</td>
                    <td>'.$key['descripcion'].'</td>
                     <td>'.$key['nitproveedor'].'</td>
                   
                      <input type="number" id="'.$key['idproducto'].'" value="1" min="1">
                    </td>
                    <td>
                      <button onClick="addProduct('.$code.');">
                        Agregar
                      </button>
                    </td>
                  </tr>';
      }
      return $html;
   	} 

 		public function search_code($code){
 			$sql = $this->db->query("SELECT * FROM tblproductos WHERE idproducto = '$code'"); 
      $product = $sql->fetch_all(MYSQLI_ASSOC); 
      $status = 0;
      foreach ($product as $key){
    		$this->code = $key['idproducto'];
    		$this->product = $key['nombre'];
    		$this->description = $key['descripcion'];
    		$this->price = $key['nitproveedor'];
    		$status++;
    	}
    	return $status;
 		}
	}
?>