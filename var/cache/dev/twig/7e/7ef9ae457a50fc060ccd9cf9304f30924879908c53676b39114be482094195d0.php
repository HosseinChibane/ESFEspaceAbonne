<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_63a66bb54f6aac5819d34919b99168436f52cd3fb80afc61d05a1e924136477b extends Twig_Template
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
        $__internal_646beed9b63c63e5fdb4e029e59fdb9efc13fc8da58c80bf10864c7601b8fd1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646beed9b63c63e5fdb4e029e59fdb9efc13fc8da58c80bf10864c7601b8fd1e->enter($__internal_646beed9b63c63e5fdb4e029e59fdb9efc13fc8da58c80bf10864c7601b8fd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_a15b3e38aecc2f839868fbd61e9c0e1b4c52cf7aff217a1b6a2fec0f01f66197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15b3e38aecc2f839868fbd61e9c0e1b4c52cf7aff217a1b6a2fec0f01f66197->enter($__internal_a15b3e38aecc2f839868fbd61e9c0e1b4c52cf7aff217a1b6a2fec0f01f66197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_646beed9b63c63e5fdb4e029e59fdb9efc13fc8da58c80bf10864c7601b8fd1e->leave($__internal_646beed9b63c63e5fdb4e029e59fdb9efc13fc8da58c80bf10864c7601b8fd1e_prof);

        
        $__internal_a15b3e38aecc2f839868fbd61e9c0e1b4c52cf7aff217a1b6a2fec0f01f66197->leave($__internal_a15b3e38aecc2f839868fbd61e9c0e1b4c52cf7aff217a1b6a2fec0f01f66197_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
