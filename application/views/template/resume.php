<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-sm-8 col-sm-offset-2 col-md-offset-2 resume-list">

      <div class="row colbox">
        <div class="col-md-12"><p class="lead">Welcome to my web resume. Please choose a section below to view.</p></div>
      </div>

      <div class="row colbox">
        <div class="col-md-6 col-md-offset-2 col-xs-6"><p class="section-list"><a <?php echo $this->badges_model->hasbadge('objectives'); ?> href="<?php echo base_url('page/objectives');?>">Objectives</a></p></div>
        <div class="col-md-2 col-xs-6"><?php echo $this->badges_model->completed('objectives'); ?></div>
      </div>

      <div class="row colbox">
        <div class="col-md-6 col-md-offset-2 col-xs-6"><p class="section-list"><a <?php echo $this->badges_model->hasbadge('education'); ?> href="<?php echo base_url('page/education');?>">Education</a></p></div>
        <div class="col-md-2 col-xs-6"><?php echo $this->badges_model->completed('education'); ?></div>
      </div>

      <div class="row colbox">
        <div class="col-md-6 col-md-offset-2 col-xs-6"><p class="section-list"><a <?php echo $this->badges_model->hasbadge('history'); ?> href="<?php echo base_url('page/history');?>">Work History</a></p></div>
        <div class="col-md-2 col-xs-6"><?php echo $this->badges_model->completed('history'); ?></div>
      </div>

      <div class="row colbox">
        <div class="col-md-6 col-md-offset-2 col-xs-6"><p class="section-list"><a <?php echo $this->badges_model->hasbadge('skills'); ?> href="<?php echo base_url('page/skills');?>">Skills and Abilities</a></p></div>
        <div class="col-md-2 col-xs-6"><?php echo $this->badges_model->completed('skills'); ?></div>
      </div>

      <div class="row colbox">
        <div class="col-md-6 col-md-offset-2 col-xs-6"><p class="section-list"><a <?php echo $this->badges_model->hasbadge('certifications'); ?>href="<?php echo base_url('page/certifications');?>">Certifications</a></p></div>
        <div class="col-md-2 col-xs-6"><?php echo $this->badges_model->completed('certifications'); ?></div>
      </div>

    </div>
  </div> <!-- row colbox -->
</div> <!-- container -->
