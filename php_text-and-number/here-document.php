<?php
echo "Print: string1<br>";

echo <<<_DATA_

<p>
タグ内で入力したテキストはどうやって表示される？
</p>
<a href="#">リンクです！</a>
<br><br>
これぞヒアドキュメント！

_DATA_;
