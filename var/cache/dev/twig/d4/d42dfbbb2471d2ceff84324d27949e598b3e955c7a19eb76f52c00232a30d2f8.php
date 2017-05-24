<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_8974d9e4944bb19a63530693da676f38ced07e947cfcadc99acb054af86fa640 extends Twig_Template
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
        $__internal_2518fe88f4261517575c9b3de6e7b3b13532f5cd41a8b66ba64cec706b63a622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2518fe88f4261517575c9b3de6e7b3b13532f5cd41a8b66ba64cec706b63a622->enter($__internal_2518fe88f4261517575c9b3de6e7b3b13532f5cd41a8b66ba64cec706b63a622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_f2edb31f0ae828c595eb868c02d284f1c2d40f65ac7349cfec0b62c45e7ce1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2edb31f0ae828c595eb868c02d284f1c2d40f65ac7349cfec0b62c45e7ce1ae->enter($__internal_f2edb31f0ae828c595eb868c02d284f1c2d40f65ac7349cfec0b62c45e7ce1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2518fe88f4261517575c9b3de6e7b3b13532f5cd41a8b66ba64cec706b63a622->leave($__internal_2518fe88f4261517575c9b3de6e7b3b13532f5cd41a8b66ba64cec706b63a622_prof);

        
        $__internal_f2edb31f0ae828c595eb868c02d284f1c2d40f65ac7349cfec0b62c45e7ce1ae->leave($__internal_f2edb31f0ae828c595eb868c02d284f1c2d40f65ac7349cfec0b62c45e7ce1ae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\show_content.html.twig");
    }
}
