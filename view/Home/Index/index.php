<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ThinkPHP User</title>
    <link href="/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/lib/dotku/dist/css/general-cn.css" rel="stylesheet"/>
    <script src="/lib/angular/angular.js"></script>
    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.min.js"></script>
  </head>
  <body>
    
    <div class="container">
      <h1>ThinkPHP User</h1>
      <p>基于 ThinkPHP 3.2.x 编写的一个用户系统模块。通过 API 方式来完成。</p>
      <h2>使用</h2>
      <p>直接复制 /app 目录下的 /User 模块到你的文件夹中就行，如果需要二次开发，可以考虑重命名模块名称，比如 UserAPI 之类的。</p>
      <h2>使用案例</h2>
      <h3>注册</h3>
      <p>最基础的注册信息有 用户名、邮箱 和 密码，三组信息，其他的信息都可以通过自定义字段方式来实现。</p>
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
      <p>大部分的平台都支持第三方登录，不过不在本程序涉及范围内。</p>
      <h3>协定</h3>
      <p>为了更好的服务注册步骤，这里制定了一系列的协定来规范注册。</p>
      <ol>
        <li>必须传送一个 password1 和 password2，并且匹配，即 <code>password1 == password2</code></li>
      </ol>
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