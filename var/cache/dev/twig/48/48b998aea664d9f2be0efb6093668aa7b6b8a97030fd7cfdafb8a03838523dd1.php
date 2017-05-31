<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_86c2ad551ebe1bb17812582cc48b29c0e2cfce02edc682225822547dd78200df extends Twig_Template
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
        $__internal_1af92f4c68986d0dc3aca74c2820806dd2e36d87608cfab42d8fc5d136d40690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af92f4c68986d0dc3aca74c2820806dd2e36d87608cfab42d8fc5d136d40690->enter($__internal_1af92f4c68986d0dc3aca74c2820806dd2e36d87608cfab42d8fc5d136d40690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_6c67bb578a696e99f3b068accadc310dd0dc3d2aa2f93d70bf5ee71741ca70ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c67bb578a696e99f3b068accadc310dd0dc3d2aa2f93d70bf5ee71741ca70ae->enter($__internal_6c67bb578a696e99f3b068accadc310dd0dc3d2aa2f93d70bf5ee71741ca70ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_1af92f4c68986d0dc3aca74c2820806dd2e36d87608cfab42d8fc5d136d40690->leave($__internal_1af92f4c68986d0dc3aca74c2820806dd2e36d87608cfab42d8fc5d136d40690_prof);

        
        $__internal_6c67bb578a696e99f3b068accadc310dd0dc3d2aa2f93d70bf5ee71741ca70ae->leave($__internal_6c67bb578a696e99f3b068accadc310dd0dc3d2aa2f93d70bf5ee71741ca70ae_prof);

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
