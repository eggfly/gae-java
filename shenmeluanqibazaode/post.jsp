<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>
  <head>
    <title>jsp_post</title>
  </head>
  <body>
  <%
    String content = request.getParameter("content");
    if(content!=null)
      out.print(content);
  %>
  <form action="post.jsp" method="POST">
  <input type="text" name="content" />
  <input type="submit" name="button" value="post!" />
  </form>
  <a href="/">马勒戈壁</a>
  </body>
</html>
