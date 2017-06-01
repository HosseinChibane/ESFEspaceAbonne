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
        $__internal_200aecce52828fd37849c4c45479bceb77c0ecc251010e24777bd24cdcf0d39a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200aecce52828fd37849c4c45479bceb77c0ecc251010e24777bd24cdcf0d39a->enter($__internal_200aecce52828fd37849c4c45479bceb77c0ecc251010e24777bd24cdcf0d39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_8cff1d7e3731d918868dd0044c040d2d7f7d25a10c0af854455d234e0afa4481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cff1d7e3731d918868dd0044c040d2d7f7d25a10c0af854455d234e0afa4481->enter($__internal_8cff1d7e3731d918868dd0044c040d2d7f7d25a10c0af854455d234e0afa4481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_200aecce52828fd37849c4c45479bceb77c0ecc251010e24777bd24cdcf0d39a->leave($__internal_200aecce52828fd37849c4c45479bceb77c0ecc251010e24777bd24cdcf0d39a_prof);

        
        $__internal_8cff1d7e3731d918868dd0044c040d2d7f7d25a10c0af854455d234e0afa4481->leave($__internal_8cff1d7e3731d918868dd0044c040d2d7f7d25a10c0af854455d234e0afa4481_prof);

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
