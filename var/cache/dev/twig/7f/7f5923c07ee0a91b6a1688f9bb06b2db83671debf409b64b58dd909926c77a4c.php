<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_fc0c79a683535526839a76107cf454b6a778ffcbd7864afd6df50a9519c687c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_b3236b952eb52c8af5e66775bbc049734e5613b74c9ec9a7e38cbddd3405863e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3236b952eb52c8af5e66775bbc049734e5613b74c9ec9a7e38cbddd3405863e->enter($__internal_b3236b952eb52c8af5e66775bbc049734e5613b74c9ec9a7e38cbddd3405863e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_e2160277628d87f450da16178cf9491c5bbe4338be5417053a6e7940460325f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2160277628d87f450da16178cf9491c5bbe4338be5417053a6e7940460325f1->enter($__internal_e2160277628d87f450da16178cf9491c5bbe4338be5417053a6e7940460325f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3236b952eb52c8af5e66775bbc049734e5613b74c9ec9a7e38cbddd3405863e->leave($__internal_b3236b952eb52c8af5e66775bbc049734e5613b74c9ec9a7e38cbddd3405863e_prof);

        
        $__internal_e2160277628d87f450da16178cf9491c5bbe4338be5417053a6e7940460325f1->leave($__internal_e2160277628d87f450da16178cf9491c5bbe4338be5417053a6e7940460325f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_971b7b0c08acf239fd254c66b9f64d61d3f98c0f8716248b410152de0a3a6c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971b7b0c08acf239fd254c66b9f64d61d3f98c0f8716248b410152de0a3a6c1d->enter($__internal_971b7b0c08acf239fd254c66b9f64d61d3f98c0f8716248b410152de0a3a6c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a341580def9e6f541aa3e60138f8eaa7cf76cb7a670f4333ad8eef5a1321a221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a341580def9e6f541aa3e60138f8eaa7cf76cb7a670f4333ad8eef5a1321a221->enter($__internal_a341580def9e6f541aa3e60138f8eaa7cf76cb7a670f4333ad8eef5a1321a221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a341580def9e6f541aa3e60138f8eaa7cf76cb7a670f4333ad8eef5a1321a221->leave($__internal_a341580def9e6f541aa3e60138f8eaa7cf76cb7a670f4333ad8eef5a1321a221_prof);

        
        $__internal_971b7b0c08acf239fd254c66b9f64d61d3f98c0f8716248b410152de0a3a6c1d->leave($__internal_971b7b0c08acf239fd254c66b9f64d61d3f98c0f8716248b410152de0a3a6c1d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
