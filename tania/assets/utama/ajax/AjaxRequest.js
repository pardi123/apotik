class AjaxRequest
{
	//Ini untuk ngepost ke server. Url harus disamakan tiap klik fungsi d navbar: asdnkjsadsad, Data: variable class di halaman
	ajaxPost(url,data,callback)
	{
		$.ajax({
			url:url,
			type:"post",
			data:data,
			success:function(res)
			{
				callback(res);
			}
		});
	}

	ajaxGet(url,response)
	{
		$.ajax({
			url:url,
			type:"get",
			success:function(res)
			{
				response(res);
			}
		});
	}
}

let ajax = new AjaxRequest();
