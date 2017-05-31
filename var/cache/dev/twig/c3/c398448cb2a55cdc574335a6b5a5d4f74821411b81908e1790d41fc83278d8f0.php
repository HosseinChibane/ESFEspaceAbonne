<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_3f177243aad3212c75c98d83e3ee0f8abe5e71c8b8ac03d2e8164e906dbe4179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b67fbe9eb1d5a1be45b1b45d63ac8e239a15cefe6b1340009f3a835a285b4586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67fbe9eb1d5a1be45b1b45d63ac8e239a15cefe6b1340009f3a835a285b4586->enter($__internal_b67fbe9eb1d5a1be45b1b45d63ac8e239a15cefe6b1340009f3a835a285b4586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_4f9ed7c9f31a6a46239d779684c829a5f8ba75867bf4b93ae412053b8cd04687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9ed7c9f31a6a46239d779684c829a5f8ba75867bf4b93ae412053b8cd04687->enter($__internal_4f9ed7c9f31a6a46239d779684c829a5f8ba75867bf4b93ae412053b8cd04687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_b67fbe9eb1d5a1be45b1b45d63ac8e239a15cefe6b1340009f3a835a285b4586->leave($__internal_b67fbe9eb1d5a1be45b1b45d63ac8e239a15cefe6b1340009f3a835a285b4586_prof);

        
        $__internal_4f9ed7c9f31a6a46239d779684c829a5f8ba75867bf4b93ae412053b8cd04687->leave($__internal_4f9ed7c9f31a6a46239d779684c829a5f8ba75867bf4b93ae412053b8cd04687_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_777186523827519c15fec248a1e99ca09f693ac6ee8c613b09677a2c5c360cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777186523827519c15fec248a1e99ca09f693ac6ee8c613b09677a2c5c360cbc->enter($__internal_777186523827519c15fec248a1e99ca09f693ac6ee8c613b09677a2c5c360cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_764ca0548e715742f334a5e3592fabcd1c13eba2c785ebc96014b65a9283518b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764ca0548e715742f334a5e3592fabcd1c13eba2c785ebc96014b65a9283518b->enter($__internal_764ca0548e715742f334a5e3592fabcd1c13eba2c785ebc96014b65a9283518b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_764ca0548e715742f334a5e3592fabcd1c13eba2c785ebc96014b65a9283518b->leave($__internal_764ca0548e715742f334a5e3592fabcd1c13eba2c785ebc96014b65a9283518b_prof);

        
        $__internal_777186523827519c15fec248a1e99ca09f693ac6ee8c613b09677a2c5c360cbc->leave($__internal_777186523827519c15fec248a1e99ca09f693ac6ee8c613b09677a2c5c360cbc_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_a722c943ef2b6bc6c008741716b1de74db9ca1a13828df6524a06c32f32c4960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a722c943ef2b6bc6c008741716b1de74db9ca1a13828df6524a06c32f32c4960->enter($__internal_a722c943ef2b6bc6c008741716b1de74db9ca1a13828df6524a06c32f32c4960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_95247efd8302543448b302bad168762793822e86d627ef8522c07abdc4cebf5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95247efd8302543448b302bad168762793822e86d627ef8522c07abdc4cebf5e->enter($__internal_95247efd8302543448b302bad168762793822e86d627ef8522c07abdc4cebf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_95247efd8302543448b302bad168762793822e86d627ef8522c07abdc4cebf5e->leave($__internal_95247efd8302543448b302bad168762793822e86d627ef8522c07abdc4cebf5e_prof);

        
        $__internal_a722c943ef2b6bc6c008741716b1de74db9ca1a13828df6524a06c32f32c4960->leave($__internal_a722c943ef2b6bc6c008741716b1de74db9ca1a13828df6524a06c32f32c4960_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_70cfb1784cf2096b17cf89c7bd5e1d7ed13be6688ad1eb37d7617f3e1d962b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70cfb1784cf2096b17cf89c7bd5e1d7ed13be6688ad1eb37d7617f3e1d962b44->enter($__internal_70cfb1784cf2096b17cf89c7bd5e1d7ed13be6688ad1eb37d7617f3e1d962b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_0cb685a9ec45648f268f6560858b5d32d3cc6311c38c81a1850a70e9913f0fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb685a9ec45648f268f6560858b5d32d3cc6311c38c81a1850a70e9913f0fdf->enter($__internal_0cb685a9ec45648f268f6560858b5d32d3cc6311c38c81a1850a70e9913f0fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0cb685a9ec45648f268f6560858b5d32d3cc6311c38c81a1850a70e9913f0fdf->leave($__internal_0cb685a9ec45648f268f6560858b5d32d3cc6311c38c81a1850a70e9913f0fdf_prof);

        
        $__internal_70cfb1784cf2096b17cf89c7bd5e1d7ed13be6688ad1eb37d7617f3e1d962b44->leave($__internal_70cfb1784cf2096b17cf89c7bd5e1d7ed13be6688ad1eb37d7617f3e1d962b44_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_f3e7945b99779a3a9b00dbe00e6cdaf9c4507e77515e52ec089459cbb7368540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e7945b99779a3a9b00dbe00e6cdaf9c4507e77515e52ec089459cbb7368540->enter($__internal_f3e7945b99779a3a9b00dbe00e6cdaf9c4507e77515e52ec089459cbb7368540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_8427824c8e364cb0c12a62931530827421db11a794ae29ac6900b227b688aae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8427824c8e364cb0c12a62931530827421db11a794ae29ac6900b227b688aae0->enter($__internal_8427824c8e364cb0c12a62931530827421db11a794ae29ac6900b227b688aae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8427824c8e364cb0c12a62931530827421db11a794ae29ac6900b227b688aae0->leave($__internal_8427824c8e364cb0c12a62931530827421db11a794ae29ac6900b227b688aae0_prof);

        
        $__internal_f3e7945b99779a3a9b00dbe00e6cdaf9c4507e77515e52ec089459cbb7368540->leave($__internal_f3e7945b99779a3a9b00dbe00e6cdaf9c4507e77515e52ec089459cbb7368540_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\vich\\uploader-bundle\\Resources\\views\\Form\\fields.html.twig");
    }
}
