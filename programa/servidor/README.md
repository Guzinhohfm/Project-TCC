Iniciar Container:
docker run -d --name gitlab-runner -v //usr//share//gitlab-runner//config:/etc/gitlab-runner -v //var//run//docker.sock:/var/run/docker.sock gitlab/gitlab-runner:latest

Acessar container e dar o seguinte comando:
gitlab-runner register

Enter the GitLab instance URL (for example, https://gitlab.com/):
Digitar== https://gitlab.com/
Enter the registration token:
Pegar token na aba settings->CI/CD->runner
Enter a description for the runner:
[93171b16c09e]: ESCOLHERQUALQUERNOME
Enter tags for the runner (comma-separated):
*Enter*
Enter optional maintenance note for the runner:
*Enter*
Registering runner... succeeded                     runner=GR1348941z6XRyywz
Enter an executor: docker, docker-ssh, shell, ssh, custom, parallels, virtualbox, docker+machine, docker-ssh+machine, kubernetes:
Digitar== docker
Enter the default Docker image (for example, ruby:2.7):
Digitar== docker/compose