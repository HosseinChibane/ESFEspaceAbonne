<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f693788ec7e82f1313b42122b50b8a0d7de0d85ba9a8c5b454761f632864ac7d extends Twig_Template
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
        $__internal_51cd76ec897e8a4ec624731ce80a9fe51411f21885daf2509e915bfe2a50185d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51cd76ec897e8a4ec624731ce80a9fe51411f21885daf2509e915bfe2a50185d->enter($__internal_51cd76ec897e8a4ec624731ce80a9fe51411f21885daf2509e915bfe2a50185d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_cc1ebecd6fa6ac2b3af454a6ff202972167eaab472d7141fc1e83fcbf5b4c1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1ebecd6fa6ac2b3af454a6ff202972167eaab472d7141fc1e83fcbf5b4c1e9->enter($__internal_cc1ebecd6fa6ac2b3af454a6ff202972167eaab472d7141fc1e83fcbf5b4c1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_51cd76ec897e8a4ec624731ce80a9fe51411f21885daf2509e915bfe2a50185d->leave($__internal_51cd76ec897e8a4ec624731ce80a9fe51411f21885daf2509e915bfe2a50185d_prof);

        
        $__internal_cc1ebecd6fa6ac2b3af454a6ff202972167eaab472d7141fc1e83fcbf5b4c1e9->leave($__internal_cc1ebecd6fa6ac2b3af454a6ff202972167eaab472d7141fc1e83fcbf5b4c1e9_prof);

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
