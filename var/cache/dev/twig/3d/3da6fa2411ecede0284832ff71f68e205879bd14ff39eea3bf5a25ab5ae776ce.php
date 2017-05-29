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
        $__internal_1bb44a5e471254bbfe9a4e9e9979218746285a216aa3828dad48e762e72363b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb44a5e471254bbfe9a4e9e9979218746285a216aa3828dad48e762e72363b1->enter($__internal_1bb44a5e471254bbfe9a4e9e9979218746285a216aa3828dad48e762e72363b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_d91186125120a073e447c19fe9ab4c910579c83e9d72e3c20db1c7633425b53b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91186125120a073e447c19fe9ab4c910579c83e9d72e3c20db1c7633425b53b->enter($__internal_d91186125120a073e447c19fe9ab4c910579c83e9d72e3c20db1c7633425b53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_1bb44a5e471254bbfe9a4e9e9979218746285a216aa3828dad48e762e72363b1->leave($__internal_1bb44a5e471254bbfe9a4e9e9979218746285a216aa3828dad48e762e72363b1_prof);

        
        $__internal_d91186125120a073e447c19fe9ab4c910579c83e9d72e3c20db1c7633425b53b->leave($__internal_d91186125120a073e447c19fe9ab4c910579c83e9d72e3c20db1c7633425b53b_prof);

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
