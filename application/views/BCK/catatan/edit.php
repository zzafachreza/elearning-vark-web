
<?php

$data = $this->db->query("SELECT * FROM data_$modul WHERE id_$modul='$id'")->row_object();

?>
<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url($modul) ?>"><?php echo ucfirst($modul) ?></a></li>
	    <li class="breadcrumb-item active" aria-current="page">Edit</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	  <form action="<?php echo site_url($modul.'/update') ?>" method="POST" enctype="multipart/form-data" >

	<a href="<?php echo site_url($modul) ?>" class="btn bg-ketiga"><i class="flaticon2-left-arrow-1"></i> Kembali</a>
  	<button class="btn bg-utama" type="SUBMIT"><i class="flaticon2-files-and-folders"></i> Simpan</button>
	  </div>
	  	<div class="card-body">
	  		<form>
	
                <input name="id_<?php echo $modul ?>" type="hidden" value="<?php echo $id ?>" />
	
			  
			  
			  
			    <?php
    	  			

    	  			
    	  			foreach($this->db->query("SHOW COLUMNS from `data_$modul` WHERE FIELD !='id_$modul'")->result() as $col){
    	  			?>
    	  	
    
    	  			        
    	  			        <div class="form-group col col-sm-6">
        			    <label class="AppLabel">
        			 		<?php echo ucfirst(str_replace("_"," ",$col->Field)) ?> 
        			     </label>
        			   
        			    <input autocomplete="off" readonly value="<?php echo $data->{$col->Field} ?>"  name="<?php echo $col->Field ?>" class="form-control" id="<?php echo $col->Field ?>" >
        			  </div>
    	  			        
    	  	
    	  			
    	  			
    	  	
    	  			
    	  			
    	  			<?php } ?>
    	  			
    	  			
    	  			<div class="form-group col col-sm-6">
    	  			    <label>Masukan Jawaban</label>
    	  			    <textarea class="form-control" autofocus="autofocus" name="jawaban"></textarea>
    	  			</div>


			 
			</form>
		  </div>
		  <div class="card-footer">

		  </div>
	  </form>
	</div>


</div>



