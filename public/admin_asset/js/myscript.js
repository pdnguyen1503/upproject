$(document).ready(function () {
    $('#Addimage').click(function () {
        $('#insert').append('<div class="form-group "><label for="cname" class="control-label col-lg-2">image <span>*</span></label><div class="col-lg-10"><input class="form-control" id="cname" name="IProductDetail[]" type="file"  /></div></div>');
    });
});
$(document).ready(function () {
    $("a#del_img_detail").on('click',function () {
        alert(111);
    });
});