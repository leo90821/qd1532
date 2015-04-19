function keDialog(title, msg)
{
	var dialog = KindEditor.dialog({
		width : 500,
		title : title,
		body : '<div style="margin:10px; text-align:center;"><strong>' + msg + '</strong></div>',
		closeBtn : {
			name : '关闭',
			click : function(e) {
					dialog.remove();
			}
		},
		yesBtn : {
			name : '确定',
			click : function(e) {
					dialog.remove();
			}
		}
//                                                noBtn : {
//                                                        name : '取消',
//                                                        click : function(e) {
//                                                                dialog.remove();
//                                                        }
//                                                }
	});

}

function keDialogNoBtn(title, msg)
{
	var dialog = KindEditor.dialog({
		width : 500,
		title : title,
		body : '<div style="margin:10px; text-align:center;"><strong>' + msg + '</strong></div>',
		closeBtn : {
			name : '关闭',
			click : function(e) {
					dialog.remove();
			}
		}
	});

}