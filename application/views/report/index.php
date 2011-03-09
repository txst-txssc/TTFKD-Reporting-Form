<?php include('application/views/layout/header.php');?>

<h2>2011 Texas Tobacco Free Kids Day Report Form</h2>

<div id="form">
  
  <?php echo validation_errors(); ?>
  <?=form_open('form/create');?>
  
  <fieldset class="group">
    <legend>Group Information</legend>
    
    <div id="group_name">
      <label>Group Name:</label>
      <input type="text" name="group[name]" value="<?php echo set_value('group[name]'); ?>" data-validate="validate(required)"/>
    </div>
    
    <div id="group_organization">
      <label>School / Organization:</label>
      <input type="text" name="group[organization]" value="<?php echo set_value('group[organization]'); ?>" data-validate="validate(required)" />
    </div>
    
    <div id="group_address">
      <label>Address:</label>
      <input type="text" name="group[address]" value="<?php echo set_value('group[address]'); ?>" data-validate="validate(required)" />
    </div>
    
    <div id="group_city" class="left">
      <label>City:</label>
      <input type="text" name="group[city]" value="<?php echo set_value('group[city]'); ?>" data-validate="validate(required)" />
    </div>
    
    <div id="group_state" class="left">
      <label>State:</label>
      <input type="text" name="group[state]" value="<?php echo set_value('group[state]'); ?>" data-validate="validate(required, rangelength(2,2))" />
    </div>
    
    <div id="group_zip" class="left">
      <label>Zip:</label>
      <input type="text" name="group[zip]" value="<?php echo set_value('group[zip]'); ?>" data-validate="validate(required, rangelength(5,5))" />
    </div>
    
  </fieldset>
  
  <fieldset>
    <legend>Adult Contact</legend>
    
    <div id="sponsor_name">
      <label>Name:</label>
      <input type="text" name="sponsor[name]" value="<?php echo set_value('sponsor[name]'); ?>" data-validate="validate(required)" />
    </div>
    
    <div id="sponsor_email">
      <label>Email:</label>
      <input type="text" name="sponsor[email]" value="<?php echo set_value('sponsor[email]'); ?>" data-validate="validate(required, email)" />
    </div>
    
    <div id="sponsor_phone">
      <label>Phone:</label>
      <input type="text" name="sponsor[phone]" value="<?php echo set_value('sponsor[phone]'); ?>" data-validate="validate(required, digits)" />
    </div>
  </fieldset>
  
  <fieldset class="group">
    <legend>Event Information</legend>
    
    <div id="event_name">
      <label>Name:</label>
      <input type="text" name="event[name]" value="<?php echo set_value('event[name]'); ?>" data-validate="validate(required)" />
    </div>
    
    <div id="event_date">
      <label>Date:</label>
      <input type="text" name="event[date]" value="<?php echo set_value('event[date]'); ?>" data-validate="validate(required, date)" />
    </div>
    
    <div id="event_location">
      <label>Location:</label>
      <input type="text" name="event[location]" value="<?php echo set_value('event[location]'); ?>" data-validate="validate(required)" />
    </div>
    
    <div id="event_description">
      <label>Description:</label>
      <textarea name="event[description]" value="<?php echo set_value('event[description]'); ?>" data-validate="validate(required)"></textarea>
      <!--<input type="text" name="event[description]" value="<?php echo set_value('event[description]'); ?>" data-validate="validate(required)" />-->
    </div>
    
    <div id="event_youth" class="left">
      <label>Total Youth Reached:</label>
      <input type="text" name="event[youth_reached]" value="<?php echo set_value('event[youth_reached]'); ?>" data-validate="validate(required, digits)" />
    </div>
    
    <div id="event_adults" class="left">
      <label>Total Adults Reached:</label>
      <input type="text" name="event[adults_reached]" value="<?php echo set_value('event[adults_reached]'); ?>" data-validate="validate(required, digits)" />
    </div>
  </fieldset>
  
  <input type="submit" value="Submit"/>
  
  </form>
  
</div> <!-- / #form -->

<?php include('application/views/layout/footer.php');?>