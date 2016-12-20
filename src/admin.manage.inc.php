<div class="container admin">
    <nav>
        <ul class="nav nav-tabs" role="tablist" id="myTab">
            <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">管理员</a></li>
            <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">用户管理 </a></li>
            <li role="presentation"><a href="#messages" role="tab" data-toggle="tab">书籍管理</a></li>
            <li role="presentation"><a href="#settings" role="tab" data-toggle="tab">设置</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div id="manage">
                    <div>
                        <nav class="title">
                            <div><span>管理员编号</span></div>
                            <div><span>管理员</span></div>
                            <div><span>密码</span></div>
                            <div><span>权限</span></div>
                        </nav>
                        <div id="adminlist" refresh="list">
                            <script type="text/x-jquery-tmpl" templete="list" id="admin">
                              <div class="list">
                                <div><span>${id}</span></div>
                                <div><span>${name}</span></div>
                                <div><span>***</span></div>
                                <div><span>0</span></div>
                              </div>
                            </script>
                        </div>
                        <div class="buttom">
                            <div class="btn btn-default" action="add" data-toggle="modal" data-target=".bs-example-modal-lg" id="myModal"><span>添加</span></div>
                            <div class="btn btn-default" action="edit" id="edit" data-toggle="modal" data-target=".bs-example-modal-lg"><span>编辑</span></div>
                            <div class="btn btn-default" action="delete" id="delete"><span>删除</span></div>
                        </div>

                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content modal-body modal">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <div class="modal-header-bb">
                                        <span>添加管理员</span>
                                    </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">用户名</span>
                                                <input type="text" placeholder="用户名" id="adminName"  class="form-control" name="adminName">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">密码</span>
                                                <input type="password" placeholder="密码" id="password" class="form-control" name="password">
                                            </div>
                                            <div class="modal-footer">
                                                <div class="btn btn-default" id="add"><span>添加</span></div>
                                                <div class="btn btn-default" id="edit"><span>修改</span></div>
                                                <div class="btn btn-default" data-dismiss="modal"><span>取消</span></div>
                                            </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">

            </div>

            <div role="tabpanel" class="tab-pane" id="messages">

            </div>

            <div role="tabpanel" class="tab-pane" id="settings">

            </div>
        </div>
    </nav>
</div>


<script>
    $(function(){

        $('#myTab a:first').tab('show');


        function main(){
            var data=[];
            var param={};
            $.ajax({
                url:"../php/admin.manage.php",
                type:'POST',
                dataType:"JSON",
                success:function(result){
                    console.log(result);
                    data=result;
                    $("#admin").tmpl(data).appendTo('#adminlist');
                },
                error:function(){
                    console.log("error");
                }
            });
        }
            main();

        function addAdmin(){
            var param={
                'adminName':$("#adminName").val()||"",
                'password':$("#password").val()||""
            };
            $.ajax({
                url:"../php/add.admin.php",
                type:'POST',
                data:param,
                dataType:"JSON",
                success:function(result){
                    console.log(result);
                    $("#list_tmpl").tmpl(result).appendTo('#list');
                },
                error:function(){
                    console.log("error");
                }
            });
        }
        function editAdmin(item){
            var param={
                'adminName':$("#adminName").val()||"",
                'password':$("#password").val()||"",
                'indexof':item
            }
            console.log(param.indexof);
            $.ajax({
                url:"../php/edit.admin.php",
                type:'POST',
                data:param,
                dataType:"JSON",
                success:function(){

                },
                error:function(){
                    console.log("error");
                }
            });
        }
        $('#add').click(function(){
            addAdmin();
            alert("添加成功");
        });
            $('#adminlist').delegate('div', 'dblclick', function () {
                this.style.backgroundColor="#333";
                var item = $.tmplItem(this);
                var id=item.data.id;
                console.log(item.data.id);
                editAdmin(id);
            });
        $('#edit').click(function(){
            $('#adminlist').delegate('div', 'click', function () {
                this.style.backgroundColor="#333";
                var item = $.tmplItem(this);
                var id=item.data.id;
                console.log(item.data.id);
                editAdmin(id);
            });
        });

    });
</script>