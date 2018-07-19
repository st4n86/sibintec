$("input[type='checkbox']").change(function(){
    if(this.checked) {
        var url = $(this).data('done');
    }else{
        var url = $(this).data('undone');
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url,
        method: 'POST'
    });
});