<div class="container">
    <div class="content">
        <h2>Registreeru</h2>            
        <div class="form">
            <?php   echo CHtml::beginForm(); 
                    echo CHtml::errorSummary($model); ?>         
            <div class="row">
                <?php echo CHtml::activeLabel($model,'Email'); 
                      echo CHtml::activeTextField($model,'email') ?>
            </div>         
            <div class="row">
                <?php echo CHtml::activeLabel($model,'Parool'); 
                      echo CHtml::activePasswordField($model,'password') ?>
            </div>
             <div class="row">
                <?php echo CHtml::activeLabel($model,'Parool uuesti'); 
                      echo CHtml::activePasswordField($model,'confirmedPassword') ?>
            </div>
            <div class="row">
                <?php echo CHtml::activeLabel($model,'Eesnimi'); 
                      echo CHtml::activeTextField($model,'firstName') ?>
            </div>
            <div class="row">
                <?php echo CHtml::activeLabel($model,'Perekonnanimi'); 
                      echo CHtml::activeTextField($model,'lastName') ?>
            </div>
            <div class="row">
                <?php echo CHtml::activeLabel($model,'Telefon'); 
                      echo CHtml::activeTextField($model,'phone') ?>
            </div>
            <div class="row submit">
                <?php echo CHtml::submitButton('Registreeri'); ?>
            </div>         
            <?php echo CHtml::endForm(); ?>
        </div><!-- form -->
        <div class="clear"></div>
    </div>
</div>