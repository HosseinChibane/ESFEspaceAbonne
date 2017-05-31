<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_f795458e28f1cc5816869e0489a29daaf4a442b0dceb5020827a43108192c747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e5548e14d2c606c0fca77c7a94524b3c037326aa01e4e7939b3c0ecddc21de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5548e14d2c606c0fca77c7a94524b3c037326aa01e4e7939b3c0ecddc21de8->enter($__internal_9e5548e14d2c606c0fca77c7a94524b3c037326aa01e4e7939b3c0ecddc21de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_6e4a4972eed83d76155a3eb6c1d01591a0cf884b0de932c2f5498c5c7be55431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4a4972eed83d76155a3eb6c1d01591a0cf884b0de932c2f5498c5c7be55431->enter($__internal_6e4a4972eed83d76155a3eb6c1d01591a0cf884b0de932c2f5498c5c7be55431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9e5548e14d2c606c0fca77c7a94524b3c037326aa01e4e7939b3c0ecddc21de8->leave($__internal_9e5548e14d2c606c0fca77c7a94524b3c037326aa01e4e7939b3c0ecddc21de8_prof);

        
        $__internal_6e4a4972eed83d76155a3eb6c1d01591a0cf884b0de932c2f5498c5c7be55431->leave($__internal_6e4a4972eed83d76155a3eb6c1d01591a0cf884b0de932c2f5498c5c7be55431_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
