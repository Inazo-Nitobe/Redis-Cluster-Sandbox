### セットアップ手順

#### vagrantを起動する
`$ vagrant up`

#### playbookを実行する
`$ ansible-playbook -i hosts playbook.yml`

#### 注意点
ホストのIPアドレスは192.168.33.12としているが、
変更したい場合は最初にVagrantfileとhostsに記載している内容を変更しておくこと。

