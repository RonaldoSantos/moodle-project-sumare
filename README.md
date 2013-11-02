Projeto Moodle Sumare
=====================

Projeto Moodle Faculdade Sumaré

####Como baixar o projeto:

- [Guia Prático de Git](http://rogerdudler.github.io/git-guide/index.pt_BR.html)
- No console do git digitar `git clone git@github.com:RafaelLucio/moodle-project-sumare.git`

Pronto o projeto já esta baixando na sua máquina

####Instalar o Nodejs Linux

- sudo apt-get install python g++ make checkinstall
- mkdir ~/src && cd $_
- wget -N http://nodejs.org/dist/node-latest.tar.gz
- tar xzvf node-latest.tar.gz && cd node-v*
- ./configure
- checkinstall #(remove the "v" in front of the version number in the dialog)
- sudo dpkg -i node_*

####Instalar o Nodejs Windows

- [Usando um pacote](http://nodejs.org/#download)
- [Simples download Windows Instalador](http://nodejs.org/#download).
- Using [chocolatey](http://chocolatey.org/) to install [Node](http://chocolatey.org/packages/nodejs):
- `cinst nodejs`
- or for [full install with NPM](http://chocolatey.org/packages/nodejs.install):
- `cinst nodejs.install`

####Link de referência

[Instalar Nodejs Windows/Linux](https://github.com/joyent/node/wiki/Installing-Node.js-via-package-manager)

####Instalar o Ruby e o Compass (Windows):
- Baixe a versão `1.9.3` aqui [http://rubyinstaller.org/downloads/](http://rubyinstaller.org/downloads/)
- Coloque o Ruby no PATH do window (variável de ambiente), exemplo: 
	- From the desktop, right-click `My Computer` and click `Properties`.
	- In the System Properties window, click on the `Advanced tab`.
	- In the Advanced section, click the `Environment Variables` button.
- Link para referência: [aqui](http://geekswithblogs.net/renso/archive/2009/10/21/how-to-set-the-windows-path-in-windows-7.aspx)
- Abra o terminal do window e digita: `ruby -v` para exibir a versão do Ruby
- Se a versão aparecer digite `gem install compass`

####Instalar o Ruby e o Compass (Linux)
- Digite no terminal os seguintes comandos:
- `sudo apt-get update`
- `sudo apt-get install curl`
- `\curl -L https://get.rvm.io | bash -s stable`
- `source ~/.rvm/scripts/rvm`
- Para ver se tudo deu certo vamos ver a versão do RVM que acabamos de instalar `rvm -v`
- Para o Ubuntu reconhecer os comados do RVM `gedid ~/.bashrc`
- Insira isto no final do arquivo `[[ -s "$HOME/.rvm/scripts/rvm" ]] && source "$HOME/.rvm/scripts/rvm"`
- Pronto, o Ubuntu vai ler o RVM
- Agora devemos ver quais são as dependências que o RVM necessita `rvm requirements`
- Agora vamos instalar o Ruby 1.9.3, digite `rvm install 1.9.3`
- Para ver a versão do Ruby digite `ruby -v`
- Agora vamos instalar o Compass digite `gem update --system` e depois `gem install compass`
- Link para referência: [aqui](http://igorrocha.com.br/instalando-rvm-no-ubuntu-12-04-e-ambientes-ruby-2-0-com-rails-4-0-e-ruby-1-9-3-com-rails-3-2/)
- Pronto!!!

####Como rodar o projeto:

- No console digitar: `npm install -g bower grunt-cli`
- Entrar na pasta moodle-project-sumare
- Dentro da pasta moodle-project-sumare digitar os comandos `npm install && bower install`
- Digitar no console `grunt server`
