<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6af58d5e8928c0d2ad6c4fe42742140e92fbbf66f530df390e1204c0564e2012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3349d5ce6bc09d71982d368b35522dedbc31e11317ecca65699f5744d88db76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3349d5ce6bc09d71982d368b35522dedbc31e11317ecca65699f5744d88db76b->enter($__internal_3349d5ce6bc09d71982d368b35522dedbc31e11317ecca65699f5744d88db76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_219538485e1954dcb55c1e7dca7ea91ebf0538a3dcbfb84d85c473eb93cdcc8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219538485e1954dcb55c1e7dca7ea91ebf0538a3dcbfb84d85c473eb93cdcc8b->enter($__internal_219538485e1954dcb55c1e7dca7ea91ebf0538a3dcbfb84d85c473eb93cdcc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3349d5ce6bc09d71982d368b35522dedbc31e11317ecca65699f5744d88db76b->leave($__internal_3349d5ce6bc09d71982d368b35522dedbc31e11317ecca65699f5744d88db76b_prof);

        
        $__internal_219538485e1954dcb55c1e7dca7ea91ebf0538a3dcbfb84d85c473eb93cdcc8b->leave($__internal_219538485e1954dcb55c1e7dca7ea91ebf0538a3dcbfb84d85c473eb93cdcc8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b008115436d848a3e2bcf708c2d8768b82ddd0af845eeac1299cdabf2206fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b008115436d848a3e2bcf708c2d8768b82ddd0af845eeac1299cdabf2206fe1->enter($__internal_9b008115436d848a3e2bcf708c2d8768b82ddd0af845eeac1299cdabf2206fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a4710ac6deff0aaafef126e4c573a25df8175c1b0002d89115b63ab88ffc9f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4710ac6deff0aaafef126e4c573a25df8175c1b0002d89115b63ab88ffc9f70->enter($__internal_a4710ac6deff0aaafef126e4c573a25df8175c1b0002d89115b63ab88ffc9f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_a4710ac6deff0aaafef126e4c573a25df8175c1b0002d89115b63ab88ffc9f70->leave($__internal_a4710ac6deff0aaafef126e4c573a25df8175c1b0002d89115b63ab88ffc9f70_prof);

        
        $__internal_9b008115436d848a3e2bcf708c2d8768b82ddd0af845eeac1299cdabf2206fe1->leave($__internal_9b008115436d848a3e2bcf708c2d8768b82ddd0af845eeac1299cdabf2206fe1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
