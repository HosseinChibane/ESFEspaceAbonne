<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e32a2829c9ea587738937c9d48e4b4df0399fe731c7201cf1b154aa3052512d0 extends Twig_Template
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
        $__internal_247271817f7d9801f31ec93700f24404a0657526ecdd9ecd085ec7fd19ee5e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247271817f7d9801f31ec93700f24404a0657526ecdd9ecd085ec7fd19ee5e45->enter($__internal_247271817f7d9801f31ec93700f24404a0657526ecdd9ecd085ec7fd19ee5e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_29dc8d82f89750b92633544f6957e3850039c370adef590051ad121e8e183b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29dc8d82f89750b92633544f6957e3850039c370adef590051ad121e8e183b64->enter($__internal_29dc8d82f89750b92633544f6957e3850039c370adef590051ad121e8e183b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_247271817f7d9801f31ec93700f24404a0657526ecdd9ecd085ec7fd19ee5e45->leave($__internal_247271817f7d9801f31ec93700f24404a0657526ecdd9ecd085ec7fd19ee5e45_prof);

        
        $__internal_29dc8d82f89750b92633544f6957e3850039c370adef590051ad121e8e183b64->leave($__internal_29dc8d82f89750b92633544f6957e3850039c370adef590051ad121e8e183b64_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
