## お問い合わせフォーム（Contact Form 7）

- 設置ページ：/contact/
- 入力項目：
  - メールアドレス（必須）
  - 電話番号（任意）
  - お問い合わせ種別（必須：宿泊・ご予約 / 五月荘について / 広告掲載・取材 / その他）
  - お問い合わせ内容（必須）
  - プライバシーポリシー同意（必須）
- 通知メール設定：
  - 送信先：satukiso@proton.me
  - 送信元：五月荘 <noreply@kyabetukun.dpdns.org>
  - Reply-To：ユーザー入力メール（[your-email]）
  - 件名：お問い合わせフォーム経由（種別を件名に反映）
- メール形式：
  - HTMLメール：有効
  - 空行抑制：有効
- 送信方式：
  - InfinityFree 環境では PHP mail() が制限されるため、SMTP（WP Mail SMTP / Gmail API）を使用しているが有料のサーバーであれば本来は不要になるはず
