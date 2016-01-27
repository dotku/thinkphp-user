<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ThinkPHP User</title>
    <link href="<?php echo __ROOT__?>/public/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo __ROOT__?>/public/lib/dotku/dist/css/general-cn.css" rel="stylesheet"/>
    <script src="<?php echo __ROOT__?>/public/lib/angular/angular.js"></script>
    <script src="<?php echo __ROOT__?>/public/lib/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo __ROOT__?>/public/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <style>
        .container {max-width: 1000px}
    </style>
  </head>
  <body>
    
    <div class="container">
        <div class="col-md-12">
        <h1>ThinkPHP User</h1>
        <p>基于 ThinkPHP 3.2.x 编写的一个用户系统模块。通过 API 方式来完成登录，修改用户资料等操作。</p>
        </div>
        <div class="col-md-3 col-md-offset-9 hidden-xs hidden-sm" style="position:fixed; margin-top: 99px; border-left: solid 1px #ddd">
            <h2>目录</h2>
            <ul class="list-unstyled">
              <li><a href="#use">## 使用</a></li>
              <li><a href="#server">## 后端程序处理</a></li>
              <li><a href="#database">## 数据库设计</a></li>
              <li><a href="#frontend">## 前端处理</a></li>
            </ul>
        </div>
        <div class="col-md-9">
      
      <h2 id="use">使用</h2>
      <p>直接复制 /app 目录下的 /User 模块到你的文件夹中就行，如果需要二次开发，可以考虑重命名模块名称，比如 UserAPI 之类的。</p>
      <h2 id="server">后端程序处理</h2>
      <ol>
        <li>基础数据用 $input 数组来处理，比如 $input['username']，其他次要的信息进行过滤后，通过 serialize 方式来赋值于 
        $input['other'] 再入库。</li>
      </ol>
      <h2 id="database">数据库设计</h2>
      <h2 id="frontend">前端处理</h2>
      <h3>请求</h3>
      <h3>返回</h3>
      <p>通过 JSON 格式返回，会包含 <code>msg</code>、<code>code</code>、<code>data</code> 三组信息。</p>
      <p><code>msg</code> 是返回的具体信息提示</p>
      <p><code>code</code> 是返回的结果状态，小于或等于 0 都表示失败；只有大于 0 才是成功操作</p>
      <p><code>data</code> 则是具体的信息内容，包括 input 的信息，和 output 的信息</p>
      <pre>{
  "msg": "登陆成功",
  "code": "1",
  "data": {
    "input": {
      "username": "user1",
      "email": "user@domain.com",
      ...
    },
    "output": {
      "username": "user1",
      "nickname": "nick"
      ...
    }
  }
}</pre>
      <h3>前端案例</h3>
      <h4>注册</h4>
      <p>最基础的注册信息有 用户名 和 密码，两组信息，其他的信息都可以通过自定义字段方式来实现。</p>
      <div class="clearfix">
        <form class="registerForm panel panel-default col-md-4" method="post">
          <div class="form-group">
            <label for="username">username</label>
            <input name="username" placeholder="username" 
            class="form-control" value="user1" required/>
          </div>
          <div class="form-group">
            <label for="password">password</label>
            <input type="password" name="password1" placeholder="password" 
            value="admin123"
            class="form-control" required/>
          </div>
          <div class="form-group">
            <label for="password">repeat password</label>
            <input type="password" name="password2" placeholder="repeat password" 
            value="admin123"
            class="form-control" required/>
          </div>
          <div class="form-group">
            <input type="submit" value="submit" class="btn btn-primary"/>
          </div>
        </form>
      </div>
      <p>表格代码如下: </p>
      <pre>
&lt;form class=&quot;registerForm panel panel-default col-md-4&quot; method=&quot;post&quot;&gt;
  &lt;div class=&quot;form-group&quot;&gt;
    &lt;label for=&quot;username&quot;&gt;username&lt;/label&gt;
    &lt;input name=&quot;username&quot; placeholder=&quot;username&quot; 
    class=&quot;form-control&quot; value=&quot;user1&quot; required/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;form-group&quot;&gt;
    &lt;label for=&quot;password&quot;&gt;password&lt;/label&gt;
    &lt;input type=&quot;password&quot; name=&quot;password1&quot; placeholder=&quot;password&quot; 
    value=&quot;admin123&quot;
    class=&quot;form-control&quot; required/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;form-group&quot;&gt;
    &lt;label for=&quot;password&quot;&gt;repeat password&lt;/label&gt;
    &lt;input type=&quot;password&quot; name=&quot;password2&quot; placeholder=&quot;repeat password&quot; 
    value=&quot;admin123&quot;
    class=&quot;form-control&quot; required/&gt;
  &lt;/div&gt;
  &lt;div class=&quot;form-group&quot;&gt;
    &lt;input type=&quot;submit&quot; value=&quot;submit&quot; class=&quot;btn btn-primary&quot;/&gt;
  &lt;/div&gt;
&lt;/form&gt;</pre>
        <p>脚本代码如下:</p>
        <pre>// 待完成</pre>
      <p class="bg-danger text-danger" 
        style="padding: 15px">*注意* 大部分的平台都支持第三方登录，thinkphp-user 
        追求最精简化的用户登录与注册，所以第三方登录等内容不在本项目涉及范围内。</p>
      <p><span class="label label-danger">协定</span></p>
      <p>为了更好的服务注册步骤，这里制定了一系列的协定来规范注册。</p>
      <ol>
        <li>必须要有一个用户名 <code>username</code> 作为用户身份标识</li>
        <li>必须传送一个 <code>password1</code> 和 <code>password2</code>，并且匹配，即 <code>password1 == password2</code></li>
      </ol>
      <div style="font-size: 3em">待续...</div>
      </div>
    </div>
    <script>
        const __ROOT__ = "<?php echo __ROOT__ ?>";
      $(".registerForm").submit(function(event){
          // cancels the form submission
          event.preventDefault();
          if (verifyForm()) {
              submitForm();
          } else {
              alert('Verify Failed!');
          }
      });
      function verifyForm(){
          var password1 = $('.registerForm input[name=password1]').val();
          var password2 = $('.registerForm input[name=password2]').val();
          if (password1 == password2) {
              return true;
          } else {
              return false;
          }
      }
      function submitForm(){
          // Initiate Variables With Form Content
          var data = {};
          $(".registerForm").serializeArray().map(function(x){data[x.name] = x.value;}); 
       
          $.ajax({
              type: "POST",
              url: __ROOT__ + "/user.php/register",
              data: data,
              success : function(rsp){
                  console.log('data', data);
                  console.log('rsp', rsp);
              }
          });
      }
    </script>
  </body>
</html>