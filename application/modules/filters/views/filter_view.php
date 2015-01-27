<div class="row">

  <div class="col-md-2">    
    <div class="input-group">
      <span class="input-group-addon" style="">Filter By:</span>
      <select required="" class="textfield form-control" name="filter_type" id="filter_type">
        <option value="1"> National </option>
        <option value="2"> Partners </option>
      </select>
    </div>   
  </div>

  <div class="col-md-2">     
    <div class="input-group">
      <span class="input-group-addon" style="">Partner:</span>
      <select required="" class="textfield form-control" name="filter_partner" id="filter_partner">
      </select>
    </div>  
  </div>

  <div class="col-md-2">     
    <div class="input-group">
      <span class="input-group-addon" style="">Region:</span>
      <select required="" class="textfield form-control" name="filter_region" id="filter_region">
      </select>
    </div>  
  </div>

  <div class="col-md-2">    
    <div class="input-group">
      <span class="input-group-addon" style="">District:</span>
      <select required="" class="textfield form-control" name="filter_district" id="filter_district">
      </select>
    </div>   
  </div>

  <div class="col-md-2">     
    <div class="input-group">
      <span class="input-group-addon" style="">Facility:</span>
      <select required="" class="textfield form-control" name="filter_facility" id="filter_facility">
      </select>
    </div>  
  </div>

  <div class="col-md-2">    
    <div class="input-group">
      <span class="input-group-addon" style="">Device:</span>
      <select required="" class="textfield form-control" name="filter_device" id="filter_device">
      </select>
    </div>
  </div>

</div>

<script>
function filter(type,value){
      $.ajax({
          type:"POST",
          async:false,
          data:"type="+type+"&value="+value,
            url:"<?php echo base_url()."filters/filter/post"; ?>",  
            success:function(data) {
                  $("#exists").val(data);           
              }
      });
    }
</script>