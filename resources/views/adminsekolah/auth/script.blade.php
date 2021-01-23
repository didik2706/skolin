<script>
    $(function(){
        $('#provinsi').on('change',function(){
            var prov = $(this).val();    
            if(prov){
                $.ajax({
                type:"GET",
                url:"{{url('admin-sekolah/register/filter-kabkot')}}?provinsi_id="+prov,
                success:function(res){               
                    if(res){
                        $("#kabkot").empty();
                        $.each(res,function(key,value){
                            var datas = '<option value="' + value.id + '">' + value.name + '</option>';
                            $("#kabkot").append(datas);
                        });
                
                    }else{
                    $("#kabkot").empty();
                    }
                }
                });
            }else{
                $("#kabkot").empty();
            }
                
        });

        $('#kabkot').on('change',function(){
            var kabkot = $(this).val();    
            if(kabkot){
                $.ajax({
                type:"GET",
                url:"{{url('admin-sekolah/register/filter-kecamatan')}}?kabkot_id="+kabkot,
                success:function(res){               
                    if(res){
                        $("#kecamatan").empty();
                        $.each(res,function(key,value){
                            var datas = '<option value="' + value.id + '">' + value.name + '</option>';
                            $("#kecamatan").append(datas);
                        });
                
                    }else{
                    $("#kecamatan").empty();
                    }
                }
                });
            }else{
                $("#kecamatan").empty();
            }
                
        });

        $('#kecamatan').on('change',function(){
            var kecamatan = $(this).val();    
            if(kecamatan){
                $.ajax({
                    type:"GET",
                    url:"{{url('admin-sekolah/register/filter-kelurahan')}}?kecamatan_id="+kecamatan,
                    success:function(res){               
                        if(res){
                            $("#kelurahan").empty();
                            $.each(res,function(key,value){
                                var datas = '<option value="' + value.id + '">' + value.name + '</option>';
                                $("#kelurahan").append(datas);
                            });
                    
                        }else{
                        $("#kelurahan").empty();
                        }
                    }
                });
            }else{
                $("#kelurahan").empty();
            }
                
        });

    });
</script>

<script>
    $(document).ready(function(){
        $('#logo_normal').change(function(){
            const file = this.files[0]; 
            if (file) { 
                let reader = new FileReader(); 
                    reader.onload = function (event) { 
                        $("#img_preview_normal") .attr("src", event.target.result); 
                    }; 
                reader.readAsDataURL(file); 
            } 
      });
      $('#logo_samping').change(function(){
            const file = this.files[0]; 
            if (file) { 
                let reader = new FileReader(); 
                    reader.onload = function (event) { 
                        $("#img_preview_samping") .attr("src", event.target.result); 
                    }; 
                reader.readAsDataURL(file); 
            } 
      });
    });
</script>

<script>
    $(document).ready(function(){
        $('#uploadNormal').click(function(){
            $('#img_preview_normal').removeClass("dn");
            $('#img_none').addClass("dn");
        });
        $('#hapusNormal').click(function() {     
            $('#logo_normal').val('');
            $('#img_preview_normal').attr("src", '');
            $('#img_preview_normal').addClass("dn");
        });
        $('#uploadSamping').click(function(){
            $('#img_preview_samping').removeClass("dn");
            $('#img_none').addClass("dn");
        });
        $('#hapusSamping').click(function() {     
            $('#logo_samping').val('');
            $('#img_preview_samping').attr("src", '');
            $('#img_preview_samping').addClass("dn");
        });
    });
</script>