<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_24b6ce60d103cfc9a16dff3ec7a7998ea4a3329bd1a17948136e1cbf8043fa52 extends Twig_Template
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
        $__internal_6e66363f6946d4c801bafe3e66c4207eec2e6209b433a9a81f6083826261e0df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e66363f6946d4c801bafe3e66c4207eec2e6209b433a9a81f6083826261e0df->enter($__internal_6e66363f6946d4c801bafe3e66c4207eec2e6209b433a9a81f6083826261e0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_0596e317ab51592d8de9ddee293cdb8294fbf3517ade449b73e1ba5d614f5cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0596e317ab51592d8de9ddee293cdb8294fbf3517ade449b73e1ba5d614f5cde->enter($__internal_0596e317ab51592d8de9ddee293cdb8294fbf3517ade449b73e1ba5d614f5cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6e66363f6946d4c801bafe3e66c4207eec2e6209b433a9a81f6083826261e0df->leave($__internal_6e66363f6946d4c801bafe3e66c4207eec2e6209b433a9a81f6083826261e0df_prof);

        
        $__internal_0596e317ab51592d8de9ddee293cdb8294fbf3517ade449b73e1ba5d614f5cde->leave($__internal_0596e317ab51592d8de9ddee293cdb8294fbf3517ade449b73e1ba5d614f5cde_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
