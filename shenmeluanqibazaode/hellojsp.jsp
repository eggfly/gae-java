<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<jsp:useBean id="foo" class="helloappengine.Beans" scope="session" />
<html>
  <head>
    <title>hellojsp</title>
  </head>
  <body>
  <jsp:useBean id="foo2" class="helloappengine.Beans" scope="session" />
  <%= foo.getCount() %>
  <%= foo.readRecord() %>
  <a href="/">马了戈壁</a>
  </body>
</html>
