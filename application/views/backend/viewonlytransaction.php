<div class="row">
  <div class="col s12">
    <h4 class="pad-left-15 capitalize">Job Number Detail
    </h4>
  </div>
</div>
<div class="row">
  <form class='col s12' method='post' action='<?php echo site_url("site/edittransactionsubmit");?>' enctype= 'multipart/form-data'>
    <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
    <div class="row">
      <div class="input-field col l3 s12">
        <label for="jobnumber">Job number
        </label>
        <input type="text" style="border-bottom: 0px;" readonly id="jobnumber" name="jobnumber" value='<?php echo set_value('jobnumber',$before->jobnumber);?>'>
      </div>
      <div class="input-field col l3 s12" style="pointer-events: none;">
      <label for="fees">Client Name
        </label>
        <input type="text" style="border-bottom: 0px;" readonly id="fees" name="fees" value='<?php echo set_value('fees',$before->fees);?>'>
      </div>
      <div class="input-field col s12 l3" style="pointer-events: none;">
        <label for="Date">Date of Creation
        </label>
        <input type="date" style="border-bottom: 0px;" readonly id="Date" class="datepicker" name="date" value='<?php echo set_value('date',$before->date);?>'>
      </div>
      <div class="input-field col s12 l3" style="pointer-events: none;">
        <label for="Date">Due Date
        </label>
        <input type="date" style="border-bottom: 0px;" readonly id="Date" class="datepicker" name="date" value='<?php echo set_value('date',$before->date);?>'>
      </div>
    </div>
    <div class=" row">
      <div class=" input-field col s12 l3" style="pointer-events: none;">
      <label for="fees">Assigned to
        </label>
        <input type="text" style="border-bottom: 0px;" readonly id="fees" name="fees" value='<?php echo set_value('fees',$before->fees);?>'>
      </div>
      <!-- <div class="input-field col s12 l3">
        <label for="source">Source
        </label>
        <input type="text" readonly id="source" name="source" value='<?php echo set_value('source',$before->source);?>'>
      </div> -->
      <div class="input-field col s12 l3">
        <label for="invoicenumber">Customer Number
        </label>
        <input type="text" style="border-bottom: 0px;" readonly id="invoicenumber" name="invoicenumber" value='<?php echo set_value('invoicenumber',$before->invoicenumber);?>'>
      </div>
      <div class="input-field col s12 l3">
        <label for="fees">Value Of Work
        </label>
        <input type="text" style="border-bottom: 0px;" readonly id="fees" name="fees" value='<?php echo set_value('fees',$before->fees);?>'>
      </div>
    </div>
    <div class="row">
    <div class="input-field col s12 l3" style="pointer-events: none;">
      <!-- <div class="input-field col s12 l3"> -->
        <label for="fees">Divisions
        </label>
        <input type="text" style="border-bottom: 0px;" readonly id="fees" name="fees" value='<?php echo set_value('fees',$before->fees);?>'>
      <!-- </div> -->
      </div>
      <div class="input-field col s12 l3" style="pointer-events: none;">
      <label for="fees">Periodicity Of Work
        </label>
        <input type="text" style="border-bottom: 0px;" readonly id="fees" name="fees" value='<?php echo set_value('fees',$before->fees);?>'>
      </div>
    </div>
    <div class="row">
      <div class="col s12 l3">
        <label>Work
        </label>
        <textarea name="typeofwork" style="border-bottom: 0px;"  readonly placeholder="Enter text ..." class="materialize-textarea">
          <?php echo set_value( 'typeofwork',$before->typeofwork);?> 
        </textarea>
      </div>
      <div class="col s12 l3">
        <label>Period Of Assignment
        </label>
        <textarea name="periodofassignment" style="border-bottom: 0px;"  readonly placeholder="Enter text ..." class="materialize-textarea">
          <?php echo set_value( 'periodofassignment',$before->periodofassignment);?>
        </textarea>
      </div>
      <div class="col s12 l3">
        <label>Description
        </label>
        <textarea name="message" style="border-bottom: 0px;"  class="materialize-textarea" readonly placeholder="Enter text ...">
          <?php echo set_value( 'message',$before->message);?>
        </textarea>
      </div>
    </div>
    <!-- <div class="row">
      <div class="file-field input-field col l4 s12">
        <span class="img-center big">
          <?php if($before->invoice == "") { } else {?>
          <img src="<?php echo base_url('uploads')."/".$before->invoice; ?>">
          <?php } ?>
        </span>
        <div class="btn blue darken-4">
          <span>invoice
          </span>
          <input name="invoice" type="file" multiple>
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('invoice',$before->invoice);?>">
        </div>
      </div>
    </div> -->
    <div class="row">
      <div class="col s6">
        <!-- <button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save
        </button> -->
        <a href='<?php echo site_url("site/viewtransaction"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel
        </a>
      </div>
    </div>
  </form>
</div>
