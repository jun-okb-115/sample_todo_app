<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
</head>
<body>
  TODO APP
  <div>
     <a href="create.php">
       <p>新規作成</p>
     </a>
  </div>
  <div>
    <table>
      <tr>
        <th>ID</th>
        <th>内容</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
        <tr>
          <td></td>
          <td></td>
          <td>
            <a href="edit.php">更新</a>
          </td>
          <td>
            <form action="" method="post">
              <input type="hidden" name="id" value="">
              <button type="submit">削除</button>
            </form>
          </td>
        </tr>
    </table>
  </div>
</body>
</html>