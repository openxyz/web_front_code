/*
  多级联动控件.源于JS教学时课堂上的一个例子.使用方法见示例页面.
  作者: afly@openxyz.com
*/
//解决兼容性问题
if (!Array.prototype.indexOf) {
    Array.prototype.indexOf = function(obj, start) {
         for (var i = (start || 0), j = this.length; i < j; i++){
             if (this[i] === obj) { return i; }
         }
         return -1;
    }
}

function PCD(data,ids,prompts){
  this.data = data;
  this.ids = ids;
  //列表第一项为提示项，可选
  this.prompts = prompts || [];

  // 为后面的闭包做准备，this无法闭包传送
  var o  = this;

  //为两个下拉框绑定事件
  for(var i=0;i<o.ids.length-1;i++){
    var e = document.getElementById(o.ids[i]);    
    e.onchange= function(evt){
      //事件对象的兼容性问题
      var id = (evt ? evt.target : event.srcElement).getAttribute('id');      
      o.change( o.ids.indexOf(id)  + 1 );
    }
  }
  
  //为第一个下拉框进行初始化，将导致联动反应
  o.change(0);  
  return this;
}

PCD.prototype.change = function(v){
  var pcd = this;
  //若允许提示，应对idx进行调整
  var bIdx = pcd.prompts.length>0 ? 1 : 0;

  //依次对本级和下级下拉框中的选项进行填充
  for(v; v < pcd.ids.length; v++){
    //根据上级下拉框的当前值构造出相应的idx，从json中取出本级数据
    var sid="0";
    for(var i=0;i<v;i++){
      sid += ("_" + (document.getElementById(pcd.ids[i]).selectedIndex - bIdx) );
    };
    var tmp = pcd.data[sid];

    //填充由v指定的下拉框中的各选项
    var select = document.getElementById(pcd.ids[v]);
    select.options.length = 0;    
    if (bIdx>0) select.options[0] = new Option(pcd.prompts[v],'');    
    
    if(typeof(tmp) != "undefined"){
      for(var i=0;i<tmp.length;i++){
        select.options[i+bIdx] = new Option(tmp[i],tmp[i]);
      }
    }

  }
}


