<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_92fafa2b2f43aac83441a749c3ff9dc89c943a09cae1f5b98e812bb1ad3fedfe extends Twig_Template
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
        $__internal_4cd40cb537977a3f0ab0cf70adafee55bb9ed21aa3a02f4713a82d777cedf3da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd40cb537977a3f0ab0cf70adafee55bb9ed21aa3a02f4713a82d777cedf3da->enter($__internal_4cd40cb537977a3f0ab0cf70adafee55bb9ed21aa3a02f4713a82d777cedf3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_5bb1bcaf3d0e6e5a5194eff57732755e77e8f23f2a1b5c0ebc62d3633b62c663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb1bcaf3d0e6e5a5194eff57732755e77e8f23f2a1b5c0ebc62d3633b62c663->enter($__internal_5bb1bcaf3d0e6e5a5194eff57732755e77e8f23f2a1b5c0ebc62d3633b62c663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_4cd40cb537977a3f0ab0cf70adafee55bb9ed21aa3a02f4713a82d777cedf3da->leave($__internal_4cd40cb537977a3f0ab0cf70adafee55bb9ed21aa3a02f4713a82d777cedf3da_prof);

        
        $__internal_5bb1bcaf3d0e6e5a5194eff57732755e77e8f23f2a1b5c0ebc62d3633b62c663->leave($__internal_5bb1bcaf3d0e6e5a5194eff57732755e77e8f23f2a1b5c0ebc62d3633b62c663_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
