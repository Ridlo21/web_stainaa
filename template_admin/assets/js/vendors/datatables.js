var dataTableBasic=document.querySelector("#dataTableBasic"),dataTableButtons=(dataTableBasic&&document.addEventListener("DOMContentLoaded",function(){new DataTable(dataTableBasic,{responsive:!0,dom:"<'row justify-content-between align-items-center'<'col-xl-4 col-12 d-xl-flex px-5 py-3' f><'col-xl-2 px-5 py-3 d-xl-flex justify-content-start'l><'col-sm-12 border-top'tr<br/>>><'row align-items-center border-top px-4 py-2'<'col-sm-6'i><'col-sm-6 d-flex justify-content-end'p>>",pagingType:"numbers"})}),document.querySelector("#dataTableButtons"));dataTableButtons&&document.addEventListener("DOMContentLoaded",function(){new DataTable(dataTableButtons,{responsive:!0,dom:"<'row align-items-center'<'col-xl-6 col-12 ps-lg-6 px-4 py-2'B><'col-xl-4 col-12 d-xl-flex justify-content-end'f><'col-xl-2 d-xl-flex justify-content-end'l><'col-sm-12'tr<br/>>><'row align-items-center border-top px-4 py-2'<'col-sm-6'i><'col-sm-6 d-flex justify-content-end'p>> ",buttons:[{text:"colvis",className:"btn btn-light mb-1",action:function(t,e,n,o){n.classList.remove("btn-secondary"),e.button(n).trigger()}},{text:"copyHtml5",className:"btn btn-light mb-1",action:function(t,e,n,o){n.classList.remove("btn-secondary"),e.button(n).trigger()}},{text:"csvHtml5",className:"btn btn-light mb-1",action:function(t,e,n,o){n.classList.remove("btn-secondary"),e.button(n).trigger()}},{text:"pdfHtml5",className:"btn btn-light mb-1",action:function(t,e,n,o){n.classList.remove("btn-secondary"),e.button(n).trigger()}},{text:"print",className:"btn btn-light mb-1",action:function(t,e,n,o){n.classList.remove("btn-secondary"),e.button(n).trigger()}}],pagingType:"numbers"})});