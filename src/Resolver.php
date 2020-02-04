<?php


namespace JRN;


class Resolver implements \ArrayAccess
{
    use Collection;

    /**
     * @param string $class
     * @param string|null $method
     * @return object|null
     * @throws \ReflectionException
     */
    public function handler(string $class, string $method = null)
    {
        $ref= new \ReflectionClass($class);
        $instance = $this->getInstance($ref);

        if (!$method) {
            return $instance;
        }

        $ref_method = new \ReflectionMethod($instance, $method);
        $parameteres = $this->methodResolver($ref, $ref_method);

        return call_user_func_array([$instance, $method], $parameteres);

    }

    /**
     * @param \ReflectionClass $ref
     * @return object
     * @throws \ReflectionException
     */
    private function getInstance(\ReflectionClass $ref)
    {
        $constructor = $ref->getConstructor();

        if (!$constructor) {
            return $ref->newInstance();
        }

        $parameteres = $this->methodResolver($ref, $constructor);

        return $ref->newInstanceArgs($parameteres);
    }

    /**
     * @param $ref
     * @param \ReflectionMethod $method
     * @return array
     * @throws \ReflectionException
     */
    private function methodResolver($ref, \ReflectionMethod $method)
    {
        $parameters = [];

        foreach ($method->getParameters() as $params) {

            if ($params->getType() !== null and $this->offsetExists((string)$params->getType())) {
                $parameters[] = $this->offsetGet((string)$params->getType());
                continue;
            }

            if ($params->getClass()) {
                $parameters[] = $this->handler($params->getClass()->getName());
                continue;
            }

            if ($params->isOptional()) {
                $parameters[] = $params->getDefaultValue();
                continue;
            }

        }

        return $parameters;

    }

}