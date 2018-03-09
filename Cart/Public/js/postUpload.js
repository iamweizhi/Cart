function saveReport() {
    //  onsubmit="return saveReport();"
    // jquery 表单提交
    /*if($('#goods_name').val().length<2)
    {
        alert("请输入商品名名称");
        return false;
    }*/
    $("#showDataForm").ajaxSubmit(function(message) {
    // 对于表单提交成功后处理，message为提交页面saveReport.htm的返回内容
    });
    return false; // 必须返回false，否则表单会自己再做一次提交操作，并且页面跳转
}