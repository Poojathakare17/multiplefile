<div class="row">
  <div class="col s12">
    <h4 class="pad-left-15 capitalize">Edit Job Number
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
        <input type="text" id="jobnumber" name="jobnumber" value='<?php echo set_value('jobnumber',$before->jobnumber);?>'>
      </div>
      <div class="input-field col l3 s12">
        <?php echo form_dropdown("client_id",$client_id,set_value('client_id',$before->client_id,'disabled=disabled'));?>
        <label>Client Name
        </label>
      </div>
      <div class="input-field col s12 l3">
        <label for="Date">Date of Creation
        </label>
        <input type="date" id="Date" class="datepicker" name="date" value='<?php echo set_value('date',$before->date);?>'>
      </div>
      <div class="input-field col s12 l3">
        <label for="Date">Due Date
        </label>
        <input type="date" id="Date" class="datepicker" name="date" value='<?php echo set_value('date',$before->date);?>'>
      </div>
    </div>
    <div class=" row">
      <div class=" input-field col s12 l3">
        <?php echo form_dropdown("personalloted",$personalloted,set_value('personalloted',$before->personalloted));?>
        <label>Assigned to
        </label>
      </div>
      <!-- <div class="input-field col s12 l3">
        <label for="source">Source
        </label>
        <input type="text" id="source" name="source" value='<?php echo set_value('source',$before->source);?>'>
      </div> -->
      <div class="input-field col s12 l3">
        <label for="invoicenumber">Customer Number
        </label>
        <input type="text" id="invoicenumber" name="invoicenumber" value='<?php echo set_value('invoicenumber',$before->invoicenumber);?>'>
      </div>
      <div class="input-field col s12 l3">
        <label for="fees">Value Of Work
        </label>
        <input type="text" id="fees" name="fees" value='<?php echo set_value('fees',$before->fees);?>'>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 l3">
      <div class="select-wrapper">
    <span class="caret">▼</span>
    <ul id="select-options-f9885a5d-2c57-1a9a-f6ee-2ef7ffddc53a" class="dropdown-content select-dropdown" style="width: 296px; left: 0px; position: absolute; top: 0px; opacity: 1; display: none;"><li class="active"><span>Select Option</span></li><li class=""><span>Amsri Contact name</span></li></ul>
    <select name="personalloted" class="initialized">
    <option value="" selected="selected">Select Divisions</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
      </div>
      </div>
      <div class="input-field col s12 l3">
      <div class="select-wrapper">
    <span class="caret">▼</span>
    <ul id="select-options-f9885a5d-2c57-1a9a-f6ee-2ef7ffddc53a" class="dropdown-content select-dropdown" style="width: 296px; left: 0px; position: absolute; top: 0px; opacity: 1; display: none;"><li class="active"><span>Select Option</span></li><li class=""><span>Amsri Contact name</span></li></ul>
    <select name="personalloted" class="initialized">
    <option value="" selected="selected">Select Periodicity Of Work</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 l3">
        <label>Work
        </label>
        <textarea name="typeofwork"  placeholder="Enter text ..." class="materialize-textarea">
          <?php echo set_value( 'typeofwork',$before->typeofwork);?>
        </textarea>
      </div>
      <div class="col s12 l3">
        <label>Period Of Assignment
        </label>
        <textarea name="periodofassignment"  placeholder="Enter text ..." class="materialize-textarea">
          <?php echo set_value( 'periodofassignment',$before->periodofassignment);?>
        </textarea>
      </div>
      <div class="col s12 l3">
        <label>Description
        </label>
        <textarea name="message"  class="materialize-textarea" placeholder="Enter text ...">
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
        <button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save
        </button>
        <a href='<?php echo site_url("site/viewtransaction"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel
        </a>
      </div>
    </div>
  </form>
</div>
