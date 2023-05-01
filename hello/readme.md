# これは、音声認識・音声合成を使った掲示板です。

*ウェブ音声 API (Web Speech API)* で **音声をテキストに変換・テキストを音声に変換**
掲示板の投稿を記録・内容を生成します。

### [Speech Recognition](/hello/js/recognition.html)
### [Text to Speech](/hello/js/synthesis.html)

---

## 投稿・内容 を 時間帯によって 記録／生成
Fetch API・PHP で 投稿を **年毎** のディレクトリ内の *時間帯ごと* の CSVファイルに記録

| Timeframe  |   From   |    To    |
|:-----------|:--------:|:--------:|
| ***Night***     | 00:00:00 | 05:59:59 |
| ***Morning***   | 06:00:00 | 11:59:59 |
| ***Afternoon*** | 12:00:00 | 17:59:59 |
| ***Evening***   | 18:00:00 | 23:59:59 |

PHP を使って *時間帯ごと* の CSVファイル を読み込み、掲示板に投稿を表示します。

***
