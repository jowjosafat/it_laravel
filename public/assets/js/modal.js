$(function(){
    $('.Modaldemage').on('click', function(){
        $('#exampleModalLabel').html('Update Problem')
        
        
        // input ke modal
        $('#id').val($(this).data('id'));
        $('#nama').val($(this).data('nama'));
        $('#qty').val($(this).data('qty'));
        $('#uom').val($(this).data('uom'));
        $('#jeniskerusakan').val($(this).data('jeniskerusakan'));
        $('#area').val($(this).data('area'));
        $('#dept').val($(this).data('dept'));
        $('#pic').val($(this).data('pic'));
        $('#ket').val($(this).data('ket'));
        

        $('.modal-footer').html('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="submit" id="del" class="btn btn-danger">Delete</button><button type="submit" id="saveupdate" class="btn btn-primary">Save Update</button>')

        $("#saveupdate").click(function(){
            $('.createform form').attr('action', '/createupdate', 'method', 'post', '@csrf');
        });
        
        $("#del").click(function(){
            $('.createform form').attr('action', '/delete', 'method', 'post', '@csrf');
        });
    });

    $('.Modalcreate').on('click', function(){
        $('#exampleModalLabel').html('Input Form Demage')
        

        // input ke modal
        $('#nama').val($(this).data(''));
        $('#qty').val($(this).data(''));
        $('#uom').val($(this).data(''));
        $('#jeniskerusakan').val($(this).data(''));
        $('#area').val($(this).data(''));
        $('#dept').val($(this).data(''));
        $('#pic').val('Jow');
        $('#ket').val($(this).data(''));

        $('.createform form').attr('action', '/create');
        $('.modal-footer').html('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="submit" class="btn btn-primary">Save Input</button>');
        
    });

    $('.viarModal').on('click', function(){        

        // input ke modal
        $('#id').val($(this).data('id'));
        $('#nama_p').val($(this).data('nama'));
        $('#qty_p').val($(this).data('qty'));
        $('#uom_p').val($(this).data('uom'));
        $('#jeniskerusakan_p').val($(this).data('jeniskerusakan'));
        $('#area_p').val($(this).data('area'));
        $('#dept_p').val($(this).data('dept'));
        $('#pic_p').val($(this).data('pic'));
        $('#ket_p').val($(this).data('ket'));
        $('#status_p').val('Selesai');

        
        $('.modal-footer').html('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="submit" id="createpr" class="btn btn-primary">Save PR</button><button type="submit" id="success" class="btn btn-success">Misi Success</button>');

        $("#createpr").click(function(){
            $('.viarformpr form').attr('action', '/createpr', 'method', 'post', '@csrf');
        });

        $('#success').click(function(){
            $('.viarformpr form').attr('action', '/successmisi', 'method', 'post', '@csrf');

        });
        
    });


    $('.viarModalpr').on('click', function(){
        
        

        // input ke modal
        $('#id').val($(this).data('id'));
        $('#nama_p').val($(this).data('nama'));
        $('#qty_p').val($(this).data('qty'));
        $('#uom_p').val($(this).data('uom'));
        $('#jeniskerusakan_p').val($(this).data('jeniskerusakan'));
        $('#area_p').val($(this).data('area'));
        $('#dept_p').val($(this).data('dept'));
        $('#pic_p').val($(this).data('pic'));
        $('#ket_p').val($(this).data('ket'));
        $('#harga_p').val($(this).data('harga'));
        


        $('.modal-footer').html('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="submit" id="saveupdate" class="btn btn-primary">Save Update</button>')

        $("#saveupdate").click(function(){
            $('.viarformpr form').attr('action', '/update_p', 'method', 'post', '@csrf');
        });
        
        // $("#del").click(function(){
        //     $('.viarformpr form').attr('action', '/delete_p', 'method', 'post', '@csrf');
        // });
        
    });


    $('.viarModalrepart').on('click', function(){
        
        

        // input ke modal
        $('#id').val($(this).data('id'));
        $('#nama_p').val($(this).data('nama'));
        $('#qty_p').val($(this).data('qty'));
        $('#uom_p').val($(this).data('uom'));
        $('#jeniskerusakan_p').val($(this).data('jeniskerusakan'));
        $('#area_p').val($(this).data('area'));
        $('#dept_p').val($(this).data('dept'));
        $('#pic_p').val($(this).data('pic'));
        $('#ket_p').val($(this).data('ket'));
        $('#harga_p').val($(this).data('harga'));
        $('#status_p').val('Selesai');

        
    });

    
});

