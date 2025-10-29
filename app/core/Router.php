<?php
    class Router
    {
        protected $routes = [];

        public function add(string $path, array $handler)
        {
            $this->routes[$path] = $handler;
        }

        public function getUriPath(): string
        {
            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $scriptName = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
            $uri = preg_replace("#^{$scriptName}/?#", '', $uri);
            $uri = str_replace('index.php', '', $uri);

            return trim($uri, '/');
        }

        public function dispatch()
        {
            $uri = $this->getUriPath();
            
            if (isset($this->routes[$uri])) {
                $route = $this->routes[$uri];

                // Getting the controller name and action
                $controllerName = $route['controller'];
                $method = $route['method'];

                // Load Controller
                $controllerFile = __DIR__ . "/../controllers/{$controllerName}.php";
                if (!file_exists($controllerFile)) {
                    echo "Controller file {$controllerFile} not found.";
                    return;
                }

                require_once $controllerFile;
                $controller = new $controllerName();

                if (method_exists($controller, $method)) {
                    // Call the action
                    $controller->$method();
                } else {
                    echo "Method {$method} not found in {$controllerName}.";
                }
            } else {
                http_response_code(404);
                echo "Route not found.";
            }
        }
    }
?>
