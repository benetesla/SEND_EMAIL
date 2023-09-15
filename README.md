```markdown
# Serviço de Envio de E-mails em PHP

Este é um serviço de envio de e-mails em PHP que permite aos desenvolvedores integrar facilmente o envio de e-mails em seus aplicativos web. Ele é projetado para ser flexível e personalizável, permitindo que você envie e-mails usando diferentes provedores de e-mail, como SMTP, SendGrid, Mailgun, entre outros.

## Funcionalidades

- Envio de e-mails usando diferentes provedores de e-mail.
- Suporte para anexos de arquivos.
- Personalização de templates de e-mails.
- Envio de e-mails em lote.
- Registros detalhados de envio para fins de rastreamento e depuração.

## Como Usar

1. Clone este repositório para sua máquina local.

```bash
git clone https://github.com/benetesla/SEND_EMAIL.git
```

2. Configure as credenciais do provedor de e-mail de sua escolha no arquivo de configuração `config.php`.

3. Use a biblioteca `enviar_email.php` em seu aplicativo PHP para enviar e-mails de acordo com suas necessidades.

```php
// Exemplo de uso
require_once('enviar_email.php');

// Configurações específicas para o e-mail
$opcoes = [
    'destinatario' => 'destinatario@example.com',
    'assunto' => 'Assunto do E-mail',
    'mensagem' => 'Conteúdo do E-mail',
    'anexos' => ['anexo1.pdf', 'anexo2.jpg']
];

// Envie o e-mail
enviar_email($opcoes);
```

4. Personalize os templates de e-mails na pasta `templates` de acordo com sua marca e conteúdo específicos.

## Requisitos

- PHP 7.x ou superior.
- Dependendo do provedor de e-mail escolhido, pode ser necessário configurar bibliotecas ou módulos adicionais.

## Contribuição

Contribuições são bem-vindas! Se você deseja melhorar este serviço de envio de e-mails ou adicionar novos recursos, sinta-se à vontade para criar um fork deste repositório e enviar um pull request.

## Autor

Benevanio Santos

## Licença

Este projeto está licenciado sob a Licença MIT - consulte o arquivo [LICENSE.md](LICENSE.md) para obter detalhes.

