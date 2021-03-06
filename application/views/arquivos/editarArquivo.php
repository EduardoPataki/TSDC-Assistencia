<link rel="stylesheet" href="<?=base_url('assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css')?>" />
<script type="text/javascript" src="<?=base_url('assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js')?>"></script>

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-hdd"></i>
                </span>
                <h5><?=$this->lang->line('arquicad');?></h5>
            </div>
            <div class="widget-content nopadding">
                <?=$custom_error; ?>
                <form action="<?=current_url()?>" id="formArquivo" method="post" class="form-horizontal" >


                    <div class="control-group">
                        <label for="nome" class="control-label"><?=$this->lang->line('arquinome');?>*</label>
                        <div class="controls">
                            <input id="nome" type="text" name="nome" value="<?=$result->documento?> " />

                            <input id="idDocumentos" type="hidden" name="idDocumentos" value="<?=$result->idDocumentos?> " />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="descricao" class="control-label"><?=$this->lang->line('arquidescri');?></label>
                        <div class="controls">
                            <textarea rows="3" cols="30" name="descricao" id="descricao"><?=$result->descricao?></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="descricao" class="control-label"><?=$this->lang->line('arquidt');?></label>
                        <div class="controls">
                            <input id="data" type="text" class="datepicker" name="data" value="<?=date('d/m/Y',strtotime($result->cadastro))?>" />
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i><?=$this->lang->line('arquialterar');?></button>
                                <a href="<?=site_url('arquivos')?>" class="btn"><i class="icon-arrow-left"></i><?=$this->lang->line('arquivoltar');?></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url('assets/js/jquery.validate.js')?>"></script>
<script type="text/javascript">
      $(document).ready(function(){
           $('#formArquivo').validate({
            rules :{
                  nome:{ required: true}
            },
            messages:{
                  nome :{ required: 'Campo Requerido.'}
            },
            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
                $(element).parents('.control-group').removeClass('success');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           });
           $(".datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });
      });
</script>
