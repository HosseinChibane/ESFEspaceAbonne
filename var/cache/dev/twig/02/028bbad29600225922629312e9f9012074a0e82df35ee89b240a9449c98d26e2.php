<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_386e7ba7db15792621362a0477c8fa6a375aa4e8247607c525bd44183da9af3f extends Twig_Template
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
        $__internal_dadd3e0a7196c0e80c52594e69b033f3271cc69ad73a9363cf94fb6eb8547cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dadd3e0a7196c0e80c52594e69b033f3271cc69ad73a9363cf94fb6eb8547cbe->enter($__internal_dadd3e0a7196c0e80c52594e69b033f3271cc69ad73a9363cf94fb6eb8547cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_72af06a4e4237e1ab540828338fafc09587eb279e70bab1b298fbe6a9a74b39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72af06a4e4237e1ab540828338fafc09587eb279e70bab1b298fbe6a9a74b39f->enter($__internal_72af06a4e4237e1ab540828338fafc09587eb279e70bab1b298fbe6a9a74b39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_dadd3e0a7196c0e80c52594e69b033f3271cc69ad73a9363cf94fb6eb8547cbe->leave($__internal_dadd3e0a7196c0e80c52594e69b033f3271cc69ad73a9363cf94fb6eb8547cbe_prof);

        
        $__internal_72af06a4e4237e1ab540828338fafc09587eb279e70bab1b298fbe6a9a74b39f->leave($__internal_72af06a4e4237e1ab540828338fafc09587eb279e70bab1b298fbe6a9a74b39f_prof);

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
