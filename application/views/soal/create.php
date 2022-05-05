<div class="row">
    <div class="col-sm-12">
        <?= form_open('soal/create_action'); ?>
        <div class="card mb-2">
            <div class="card-header with-border">
                <h5 class="card-title"><?= $submenu ?></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="col-sm-12">
                      
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="section" class="control-label">Pilih section</label>
                                    <select required="required" name="section" id="section" class="form-control select2" style="width:100%!important">
                                        <?php foreach ($section as $item):?>
                                            <option value="<?= $item['id_section']?>"><?= $item['nama_section']?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <div id='listening'></div>
                                    <small class="help-block" style="color: #dc3545"><?= form_error('section') ?></small>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="part" class="control-label">Pilih Part</label>
                                <select required="required" name="part" id="part" class="form-control select2" style="width:100%!important">
                                       
                                </select>
                                <small class="help-block" style="color: #dc3545"><?= form_error('part') ?></small>
                            </div>
                        </div>
                 
                        <div class="form-group">
                            <label for="jumlah_soal">Nomor Soal</label>
                            <input placeholder="No Urut Soal" type="number" class="form-control" name="urutan">
                            <small class="help-block"></small>
                        </div>

                        <div class="form-group">
                        <label for="soal" class="control-label">Soal</label>
                            <div class="form-group">
                                <textarea name="soal"  id="ckeditor1" class="ckeditor" class="form-control"><?= set_value('soal') ?></textarea>
                                <small class="help-block" style="color: #dc3545"><?= form_error('soal') ?></small>
                            </div>
                        </div>   
                        

                        <?php
                        $abjad = ['a', 'b', 'c', 'd'];
                        foreach ($abjad as $abj) :
                            $ABJ = strtoupper($abj); // Abjad Kapital
                        ?>

                            <div class="col-sm-12">
                                <label for="file">Jawaban <?= $ABJ; ?></label>
                                <div class="form-group">
                                    <textarea name="opsi_<?= $abj; ?>" id="opsi_<?= $abj; ?>" class="form-control ckeditor"><?= set_value('opsi_a') ?></textarea>
                                    <small class="help-block" style="color: #dc3545"><?= form_error('opsi_' . $abj) ?></small>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <div class="form-group col-sm-12">
                            <label for="jawaban" class="control-label"> Jawaban</label>
                            <select required="required" name="jawaban" id="jawaban" class="form-control select2" style="width:100%!important">
                                <option value="" disabled selected>Pilih  Jawaban</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                            <small class="help-block" style="color: #dc3545"><?= form_error('jawaban') ?></small>
                        </div>
                      
                        <div class="form-group col-sm-12 ">
                            <a href="<?= base_url('soaltoefl') ?>" class="btn btn-sm  btn-secondary"><i class="fa fa-arrow-left"></i> Batal</a>
                            <button type="submit" id="submit" class="btn btn-sm btn-success "><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        ajaxcsrf();
        $('#section').change(function(){
            var id_section=$('#section').val();
            if(id_section == 1){
                var html ='<p>Kosongkan soal untuk Type Section ini</p>';
                $('#listening').html(html);
            }else{
                $('#listening').html('');
            }
        $.ajax({
                url : "<?php echo base_url();?>soal/getPart",
                method : "POST",
                data : {id_section:id_section},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_part+'>'+data[i].nama_part+'</option>';
                    }
                    $('#part').html(html);

                }
            });
        });
    });
       
</script>