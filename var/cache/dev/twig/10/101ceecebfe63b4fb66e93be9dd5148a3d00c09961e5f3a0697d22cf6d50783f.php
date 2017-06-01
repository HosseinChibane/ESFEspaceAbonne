<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a6607e1cdd29a21df580b0d6c29f1945af393effc735a279413cc7eaee696ff2 extends Twig_Template
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
        $__internal_2ba3bc2a7b0af2cad655b2b23f78fe501c3675bda52a1936173a499b48fd98eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba3bc2a7b0af2cad655b2b23f78fe501c3675bda52a1936173a499b48fd98eb->enter($__internal_2ba3bc2a7b0af2cad655b2b23f78fe501c3675bda52a1936173a499b48fd98eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_67148b505802e56923a3e61c765b7dc37572d1e0fc9ff7bddee0a6231d825a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67148b505802e56923a3e61c765b7dc37572d1e0fc9ff7bddee0a6231d825a16->enter($__internal_67148b505802e56923a3e61c765b7dc37572d1e0fc9ff7bddee0a6231d825a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_2ba3bc2a7b0af2cad655b2b23f78fe501c3675bda52a1936173a499b48fd98eb->leave($__internal_2ba3bc2a7b0af2cad655b2b23f78fe501c3675bda52a1936173a499b48fd98eb_prof);

        
        $__internal_67148b505802e56923a3e61c765b7dc37572d1e0fc9ff7bddee0a6231d825a16->leave($__internal_67148b505802e56923a3e61c765b7dc37572d1e0fc9ff7bddee0a6231d825a16_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
